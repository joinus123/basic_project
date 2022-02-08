
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
                        <h1 class="pull-left">Add Socialmedia Icon</h1>

                        </div>
                        <form action="{{route('addsocialmedia-icon')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                           <div class="row">

                             <div class="col-12 form-group">
                               <label for="">Facebook Icon</label>
                               <input  type="text" contenteditable="true" spellcheck="true" value=""  name="facebook_icon" class="form-control" placeholder="facebook_link">
                             </div>


                             <div class="col-12 form-group">
                                <label for="">Instragram Icon</label>
                                <input  type="text" contenteditable="true" spellcheck="true" value=""  name="instragram_icon" class="form-control" placeholder="instragram_link">
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Twitter Icon</label>
                                <input  type="text" contenteditable="true" spellcheck="true" value=""  name="twitter_icon" class="form-control" placeholder="twitter_link">
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Linkedin Icon</label>
                                <input  type="text" contenteditable="true" spellcheck="true" value=""  name="linkedin_icon" class="form-control" placeholder="linkedin_link">
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





























