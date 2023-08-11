
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<h1><?= $title ?></h1>

<div class="row">
    <div class='col-12 col-md-8 offest-sm-2'>
        <form method="POST" action="/blog/new">
            
            <div class='form-group'>
                <label for="my-input">Title</label>
                <input id="" type="text" class="form-control" name="post_content">
            </div>
            
            <div class='form-group'>
                <label for="">Text</label><br>
                <textarea name="form-control" id="" cols="60" rows="3" name='post_control'></textarea>
            </div>
            
            <div class='form-group'>
                <button class="btn btn-success btn-sm">Create</button>
            </div>

        </form>
    </div>

</div>

<?= $this->endSection() ?> 