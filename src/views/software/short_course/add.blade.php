@extends('admin.index')
@section('Title','Faculty List')
@section('breadcrumbs','Admin')
@section('breadcrumbs_link','/Faculty/list')
@section('breadcrumbs_title','Faculty List')
@section('style')
    <style>
        input, textarea, .uneditable-input {
            width: 435px;
        }
    </style>
@stop
@section('content')
    <div class="container">
        <h2>Add Course Information</h2>
        <div id="home" class="row">
            <div class="col-md-12 text-right">
                <a href="{{url('short_course/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Add Course Information</a>
            </div>
        </div>
        <div id="Vue_component_wrapper" class="tab-pane fade in active">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Add Course Information</h5>
                </div>
                <form class="form-horizontal" method="post"
                      action="{{isset($data) ? url('short_course/update') : url('short_course/add')}}" enctype="multipart/form-data">
                    <div class="widget-content nopadding">
                        <div class="control-group">
                            <label for="faculty_photo" class="control-label" title="Faculty Photo"></label>
                            <div class="controls">
                                @if (isset($data))
                                    <img style="height: 100px" id="ImageId" src="{{env('PUBLIC_PATH')}}/img/backend/faculty/{{$data->id.'.jpg'}}">
                                @else
                                    <img style="height: 100px" src="{{env('PUBLIC_PATH')}}/img/blankavatar.png"
                                         id="ImageId">
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="faculty_photo" class="control-label" title="faculty_photo">Image</label>
                            <div class="controls">
                                <input type="hidden" name="id" value="{{isset($data) ? $data->id : ''}}">
                                <input type="file" name="image" onchange="showImage(this, 'ImageId')">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="coursecode" class="control-label" title="title">Course Name</label>
                            <div class="controls">
                                {{@csrf_field()}}
                                <input class="form-control" name="coursecode" type="text">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="overview" class="control-label" title="overview">Overview</label>
                            <div class="controls">
                                <textarea id="body" class="form-control" placeholder="overview" title="description" rows="10"
                                          name="overview" type="text">{{isset($data) ? $data->overview : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('overview') ? $errors->first('overview') : ''}}</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="feature" class="control-label" title="feature">Features</label>
                            <div class="controls">
                                <textarea id="body" class="form-control" placeholder="feature" title="feature" rows="10"
                                          name="feature" type="text">{{isset($data) ? $data->feature : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('feature') ? $errors->first('feature') : ''}}</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="scope" class="control-label" title="scope">Scope</label>
                            <div class="controls">
                                <textarea id="body" class="form-control" placeholder="scope" title="scope" rows="10"
                                          name="scope" type="text">{{isset($data) ? $data->scope : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('scope') ? $errors->first('scope') : ''}}</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="subject" class="control-label" title="subject">Subject</label>
                            <div class="controls">
                                <textarea id="body" class="form-control" placeholder="subject" title="description" rows="10"
                                          name="subject" type="text">{{isset($data) ? $data->subject : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('subject') ? $errors->first('subject') : ''}}</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="labinfo" class="control-label" title="labinfo">Lab Info</label>
                            <div class="controls">
                                <textarea id="body" class="form-control" placeholder="labinfo" title="labinfo" rows="10"
                                          name="labinfo" type="text">{{isset($data) ? $data->labinfo : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('labinfo') ? $errors->first('labinfo') : ''}}</p>
                            </div>
                        </div>
                        <hr>
                        <h1 style="text-align: center">Fees Structure</h1>
                        <hr>
                        <div class="control-group">
                            <label for="fees" class="control-label" title="fees">Fees</label>
                            <div class="controls">
                                <input placeholder="Fees" name="fees" type="text" class="form-control"
                                       value="{{isset($data) ? $data->fees : ''}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="fees" class="control-label" title="fees">Duration</label>
                            <div class="controls">
                                <input placeholder="duration" name="duration" type="text" class="form-control"
                                       value="{{isset($data) ? $data->duration : ''}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="fees_structure" class="control-label" title="fees_structure">Fees Structure</label>
                            <div class="controls">                                <textarea id="body" class="form-control" placeholder="fees_structure" title="fees_structure" rows="10"
                                          name="fees_structure" type="text">{{isset($data) ? $data->fees_structure : ''}}</textarea>
                                <p class="text-danger">{{isset($errors) && $errors->has('fees_structure') ? $errors->first('fees_structure') : ''}}</p>
                            </div>
                        </div>

                        <div class="control-group" style="margin-bottom: 50px">
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{env('PUBLIC_PATH')}}/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="{{env('PUBLIC_PATH')}}/vendor/front_assets/vue/vue.js"></script>
    <script>
        tinyMCE.init({
            selector: 'textarea',
            plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern code directionality"],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code",
            menubar: true,
            statusbar: false,
            convert_urls: true,
        });
    </script>
    <script>
        new Vue({
            el: '#Vue_component_wrapper',
            data: {
                formElement: {
{{--                    templete: '{{isset($data) ? $data->template : 'default_faculty'}}',--}}
{{--                    is_menu: parseInt('{{isset($data) ? $data->is_menu : '0'}}'),--}}
                },
            },
        });
    </script>
@stop