<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?= (isset($meta_title) ? $meta_title : 'CodeIgniter default title') ?></title>
</head>
<body>    

    <div class="container">

        <nav class="navbar bg-dark navbar-dark navbar-expand-lg mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="">CI4 tuto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/post">Post</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

<div class="container">

   