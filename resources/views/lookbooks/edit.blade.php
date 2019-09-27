@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title"><b><i class="fa fa-paper-plane-o">UBAH LOOKBOOK</i></b></h3>
				</div>
				<div class="panel-body">
              <form action="" enctype="multipart/form-data">
           {{csrf_field()}}
               <div class="form-group">
                  <label for="textarea">Ambil Gambar</label>
                  <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="editImageLookbook" required>
               </div>
               <div class="form-group ">
                 <label for="deskripsi">Deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="editDeskLookbook" 
                     aria-describedby="text" placeholder="Deskripsi" required>
              </div>
                 <progress value="0" max="100" id="progressEditLookbook">0%</progress> <br> <br>
                 <button type="submit" class="btn btn-warning mt-5 "><i class="fa fa-paper-plane-o"></i> Update</button>
              </div>
            </form>
          </div>
         </div>
       </div>
    </div>
</div>

@stop