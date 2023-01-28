<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('template') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/themify.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('template') }}/assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/responsive.css">
    <style type="text/css">
        .datasas {
            display: none;
        }
    </style>
</head>

<body>
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <div class="page-wrapper" id="pageWrapper">
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="../assets/images/logo/logo.png" alt=""></a></div>
                    <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="../assets/images/logo/dark-logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <div class="page-body-wrapper horizontal-menu">
            <header class="main-nav">
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>General </h6>
                                    </div>
                                </li>
                                <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i
                                            data-feather="headphones"></i><span>Support Ticket</span></a></li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Gallery Update {{ $galeri->title }}</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item">Gallery</li>
                                    <li class="breadcrumb-item active">Gallery Grid</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-input" role="tabpanel"
                                            aria-labelledby="pills-input-tab">
                                            <form class="theme-form" method="POST" enctype="multipart/form-data"
                                                action="{{ route('galeri.update', $galeri->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3 draggable">
                                                    <label for="input-file-1">Image
                                                        Thumbnail</label>
                                                    <input id="input-file-1" name="image" type="file">
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="input-text-1">Title</label>
                                                    <input class="form-control btn-square" id="input-text-1"
                                                        type="text"
                                                        value="{{ old('title', $galeri->title) ?? '' }}"
                                                        placeholder="Isikan Title" name="title">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 draggable">
                                                            <label for="select-1">Pilih Tipe
                                                                Galeri</label>
                                                            <select class="form-control btn-square" id="namesas"
                                                                name="type">
                                                                <option>Pilih Tipe</option>
                                                                <option
                                                                    {{ $galeri->type == 'video' ? 'selected' : '' }}
                                                                    value="1">Video
                                                                </option>
                                                                <option
                                                                    {{ $galeri->type == 'image' ? 'selected' : '' }}
                                                                    value="2">Foto
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 draggable">
                                                            <input class="form-control btn-square datasas"
                                                                id="1" type="text" name="link"
                                                                value="{{ old('link', $galeri->link) ?? '' }}"
                                                                placeholder="Masukkan Link Video Url">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="input-text-1">Deskripsi</label>
                                                    <Textarea class="form-control" name="deskripsi">{{ old('deskripsi', $galeri->deskripsi) ?? '' }}</Textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update
                                                    data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('template') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="{{ asset('template') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('template') }}/assets/js/config.js"></script>
    <script src="{{ asset('template') }}/assets/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/photoswipe/photoswipe.js"></script>
    <script src="{{ asset('template') }}/assets/js/script.js"></script>
    <script src="{{ asset('template') }}/assets/js/theme-customizer/customizer.js"></script>
    <script>
        $(document).ready(function() {
            $('#namesas').on('change', function() {
                $('.datasas').hide();
                $('#' + $(this).val()).fadeIn(700);
            }).change();
        });
    </script>
</body>

</html>
