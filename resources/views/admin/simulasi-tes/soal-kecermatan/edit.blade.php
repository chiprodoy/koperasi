@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Edit Soal Kecermatan</h3>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-input" role="tabpanel"
                                aria-labelledby="pills-input-tab">
                                <form class="theme-form" method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.soal-kecermatan.update', $question->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3 draggable">
                                        <label for="input-text-1">Pertanyaan</label>
                                        <input class="form-control btn-square" id="input-text-1" type="text"
                                            placeholder="1 + 1 = 2" name="question"
                                            value="{{ old('question', $question->question) ?? '' }}">
                                    </div>
                                    <div class="mb-3 draggable">
                                        <label for="input-file-1">Gambar <span>* jika ada</span></label>
                                        <input id="input-file-1" name="image" type="file">
                                    </div>

                                    <!-- Options container -->
                                    <label for="options">Opsi</label>

                                    <!-- Options container -->
                                    <div id="options-container">
                                        @foreach ($question->options as $index => $option)
                                            @if ($index == 0 || $index == 1)
                                                <div class="input-group mb-2 option-row">
                                                    <input type="text" name="options[]" class="form-control option-input"
                                                        placeholder="Opsi {{ $index + 1 }}" value="{{ $option }}"
                                                        required>
                                                </div>
                                            @else
                                                <div class="input-group mb-2 option-row">
                                                    <input type="text" name="options[]" class="form-control option-input"
                                                        placeholder="Opsi {{ $index + 1 }}" value="{{ $option }}"
                                                        required>
                                                    <div class="input-group-append">
                                                        <button type="button"
                                                            class="btn btn-danger remove-option">Remove</button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <!-- Button to add new options -->
                                    <button type="button" id="add-option" class="btn btn-primary mt-2 mb-3">Tambah
                                        Opsi</button>

                                    <div class="form-group">
                                        <label for="correct_option">Pilihan Benar</label>
                                        <select name="correct_option" id="correct_option" class="form-control" required>
                                            @foreach ($question->options as $option)
                                                <option value="{{ $option }}"
                                                    {{ $question->correct_option == $option ? 'selected' : '' }}>
                                                    {{ $option }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let optionCount = 2; // Start with two options

                const optionsContainer = document.getElementById('options-container');
                const correctOptionSelect = document.getElementById('correct_option');
                const addOptionButton = document.getElementById('add-option');

                // Function to add an option
                function addOption() {
                    optionCount++;
                    const optionRow = document.createElement('div');
                    optionRow.classList.add('input-group', 'mb-2', 'option-row');
                    optionRow.innerHTML = `
                    <input type="text" name="options[]" class="form-control option-input" placeholder="Opsi ${optionCount}" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger remove-option">Hapus</button>
                    </div>
                `;
                    optionsContainer.appendChild(optionRow);
                    updateCorrectOptionSelect();
                }

                // Function to remove an option
                function removeOption(event) {
                    if (optionCount > 2) {
                        event.target.closest('.option-row').remove();
                        optionCount--;
                        updateCorrectOptionSelect();
                    }
                }

                // Function to update the correct option dropdown based on the current option inputs
                function updateCorrectOptionSelect() {
                    correctOptionSelect.innerHTML = ''; // Clear previous options

                    // Get all option inputs and add them to the correct option select dropdown
                    const optionInputs = document.querySelectorAll('.option-input');
                    optionInputs.forEach((input, index) => {
                        const optionValue = input.value || `Opsi ${index + 1}`;
                        const optionElement = document.createElement('option');
                        optionElement.value = optionValue;
                        optionElement.text = optionValue;
                        correctOptionSelect.appendChild(optionElement);
                    });

                    // If no option inputs have a value, set a default
                    if (correctOptionSelect.options.length === 0) {
                        const defaultOption = document.createElement('option');
                        defaultOption.value = "";
                        defaultOption.text = "No options available";
                        correctOptionSelect.appendChild(defaultOption);
                    }
                }

                // Add new option on button click
                addOptionButton.addEventListener('click', addOption);

                // Remove option on "Remove" button click
                optionsContainer.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-option')) {
                        removeOption(event);
                    }
                });

                // Update correct option dropdown whenever the text in the options changes
                optionsContainer.addEventListener('input', function() {
                    updateCorrectOptionSelect();
                });

                // Initialize correct option dropdown with default 2 options
                updateCorrectOptionSelect();
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#namesas').on('change', function() {
                    $('.datasas').hide();
                    $('#' + $(this).val()).fadeIn(700);
                }).change();
            });
        </script>
    @endpush
@endsection
