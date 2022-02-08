
@extends('backend.dashboard')
@section('main_content')
<div class="app-content content add-item admin-profile">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
                      <div class="col-lg-6 offset-lg-3 col-12">
                        <div class="box">
                         <div class="col-12 d-flex justify-content-between align-items-center">
                        <h1 class="pull-left">create Record</h1>

                        </div>
                        <form action="{{route('add-record')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                           <div class="row">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                             <div class="col-12 form-group">
                               <label for="">Heading</label>
                               <input  type="text" contenteditable="true" spellcheck="true" value=""  name="h1" class="form-control" placeholder="heading1">
                             </div>


                             <div class="col-12 form-group">
                                <label>Paragraph</label>
                                <textarea class="editor form-control" rows="3"   id="section_one_box_two_text"  name="p1" required>
                                  </textarea>
                             </div>


                              <div class="col-12 form-group">
                                <label for="">Cureent Amount</label>
                                <input  type="number" contenteditable="true" spellcheck="true" value=""  name="current_amount" class="form-control" placeholder="current_amount">
                              </div>


                              <div class="col-12 form-group">
                                <label for="">Percentage</label>
                                <input  type="number" contenteditable="true" spellcheck="true" value=""  name="percentage" class="form-control" placeholder="percentage">
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Targe Amount</label>
                                <input  type="number" contenteditable="true" spellcheck="true" value=""  name="target_amount" class="form-control" placeholder="target_amount">
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Content Image</label>
                               <div class="attached"> <img src="" style="width:80px" alt="">
                                 <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                 <input type="file" name="content_image" id="upload"  name="file">
                               </div>

                             </div>
                               <div class="col-12 form-group text-center">
                               <button type="submit" class="blue-btn w-100" >Add</button>
                             </div>
                           </div>
                         </form>
                        </div>

                        </div>
                      </div>
                    </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!-- block modal start here-->


  <!-- block modal end here-->


  <!--confirm block  modal start here-->
  <div class="login-fail-main">
   <div class="featured inner">
     <div class="modal fade confirm-delete-modal another-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lgg">
         <div class="modal-content">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
           <div class="payment-modal-main">
             <div class="payment-modal-inner">
               <form action="">
                 <div class="row">
                   <div class="col-12">
   <img src="images/check.png" class="img-fluid" alt="">
                     <p>Abc user has been unblocked</p>
                   </div>
                   <div class="col-12 text-center">
                     <button type="button" class="blue-btn" data-dismiss="modal">Got It </button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
@stop





























