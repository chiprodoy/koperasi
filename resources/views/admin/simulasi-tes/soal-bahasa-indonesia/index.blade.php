@extends('layouts.app')
@section('content')
    @if (session('success'))
        <div class="container-fluid">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <a href="{{ route('admin.soal-bahasa-indonesia.create') }}" class="btn btn-primary mb-3">Tambah
                            data</a>
                        <h5>Daftar Soal Bahasa Indonesia</h5>
                    </div>
                    <div class="card-body row">
                        @if ($questions->isEmpty())
                            <p>Tidak ada soal</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th>Pertanyaan</th>
                                        <th>Gambar</th>
                                        <th>Opsi</th>
                                        <th>Jawaban Benar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $index => $question)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $question->question }}</td>
                                            <td><img src="{{ asset('/storage/' . $question->image) }}"
                                                    alt="{{ $question->image }}"></td>
                                            <td>
                                                <ol>
                                                    @foreach ($question->options as $option)
                                                        <li style="list-style-type: upper-latin">{{ $option }}</li>
                                                    @endforeach
                                                </ol>
                                            </td>
                                            <td>{{ $question->correct_option }}</td>
                                            <td>
                                                <div class="pt-2">
                                                    <a href="{{ route('admin.soal-bahasa-indonesia.edit', $question->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#tooltipmodal{{ $question->id }}">Delete</button>
                                                    <div class="modal fade" id="tooltipmodal{{ $question->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Apakah Kamu Yakin Ingin
                                                                        Menghapus
                                                                        Soal</h5>
                                                                    <button class="btn-close" type="button"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.soal-bahasa-indonesia.destroy', $question->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button class="btn btn-primary"
                                                                            type="submit">Hapus</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination">
                                {{ $questions->links() }}
                            </div>
                        @endif
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
                    <input type="text" name="options[]" class="form-control option-input" placeholder="Option ${optionCount}" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger remove-option">Remove</button>
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
                        const optionValue = input.value || `Option ${index + 1}`;
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
