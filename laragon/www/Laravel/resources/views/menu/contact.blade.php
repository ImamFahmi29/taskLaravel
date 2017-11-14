@extends('menu.layout')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Imam Fahmi Fadillah</h2>
            <img class="img-circle" src="img/imam.jpg" alt="Generic placeholder image" width="250" height="250">
        </div><!-- /.col-lg-4 -->
        <div class="col-md-8">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4" for="email">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Anda">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4" for="messages">Messages</label>
                    <div class="col-sm-8">
                        <textarea name="messages" id="" cols="30" rows="10" class="form-control" id="messages" placeholder="Messages Anda"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
</div>
