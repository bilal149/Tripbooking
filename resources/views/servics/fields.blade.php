<style>
    .teacher_images{
        height:160px;
        padding-left:1px;
        padding-right:1px;

        background:#eee;
        width:140px;
        margin: 0 auto;
        border-radius:50%;
        vertical-align:middle;
        float:left;

    }
    .image{
        vertical-align: middle;
        width:50px;
        height:50px;
        border-radius:50px;

    }
    .image > input[type="file"]{
        display:none;
    }
    .btn-choose{
        padding:5px;
        text-align:center;
        background:gray;
        border:none;
        color:black;
        border-radius:50%;

    }
    .fieldset{
        display:block;
        width:100%;
        padding:0;
        font-size:15px;
        border:0;
        line-height:inherit;
        color:#797979;
        border-bottom:1px solid #e5e5e5;

    }
    .info{
        float:right;

    }
</style>


<div class="row">
    <div class="col-lg-12">

    <div class="modal fade left" id="admission-add-modal" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"style="width:98%" role="document">
    <div class="modal-content">
<div class="modal-header">
        <h5 class="modal-title" id ="exampleModelLable"><i class="fa fa-registered" aria-hidden="true">
        New Admission Form</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>

<div class="modal-body">

<div class="panel panel-default">

    <div class="panel-heading">
    <b><i class="fa fa-book"></i>Details: </b>
    <b class="pull-right"></b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
    <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">



    <!---------------------Image--------------------->
  
        <td class="image" >
        {!!Html::image('posts',
         null,['class' =>'posts', 'id' => 'showImage'])!!}
        <input type="file" name="image"  id="image" 
         accept="image/x-png,image/png,image/jpg,image/jpeg">
        </td>
       
                <div class="col-md-4">
                <div class="form-group">
                        <input type="text" name="heading"  id="heading" class="form-control"
                            placeholder="details" >
                    </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                <input type="text" name="details"  id="details" class="form-control"
                                    placeholder="details" >
                            </div>
                            </div>
    </div>
    </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
{!! Form::submit('Register Admission',['class'=>'btn btn-success'])!!}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Script--->

@section('scripts')
       <script type="text/javascript">

       ///DOB///
       $('#dob').datetimepicker({
           format: 'YYYY-MM-DD',
           useCurrent: false
       })

       /////browse image////

       $('#browse_file').on('click',function(){
        $('#image').click();
       })

       $('#image').on('change',function(e){
           showFile(this,'#showImage');
       })

       $('#dob').datepicker ({
           changeMonth:true,
           changeYear:true,
           dateFormat:'yy-mm-dd'
       });
       function showFile(fileInput,img,showName){
           if(fileInput.files[0]){
               var reader = new FileReader();
               reader.onload = function(e){
                   $(img).attr('src',e.target.result);
               }
               reader.readAsDataURL(fileInput.files[0]);
           }
           $(showName).text(fileInput.files[0].name)
       };


       </script>
@endsection




