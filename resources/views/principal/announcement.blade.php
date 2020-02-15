@extends('layout.principal')

@section('content')
<div class="main-content">
    <div class="container-fluid" style="margin-top: -22px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#postannouncement">Post
                            Announcement</button>
                    </div>
                    <div class="card-body">
                        <div class="custom-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="aTAB" data-toggle="tab"
                                        href="#anouncementTAB" role="tab" aria-controls="custom-nav-home"
                                        aria-selected="true">Announcement</a>
                                    <a class="nav-item nav-link" id="unTAB" data-toggle="tab" href="#undeliveredSMSTAB"
                                        role="tab" aria-controls="custom-nav-profile" aria-selected="false">Delivered
                                        SMS</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="anouncementTAB" role="tabpanel"
                                    aria-labelledby="anouncementTAB">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th>Topic</th>
                                                            <th class="text-center">Date Posted</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($announcement as $announcements)
                                                        <tr style="font-size:12px">
                                                            <td>{{$announcements->title}}</td>
                                                            <td class="text-center">{{$announcements->post_date}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                                <button class="item sendsms" title="send">
                                                                    <i class="zmdi zmdi-mail-send"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="undeliveredSMSTAB" role="tabpanel"
                                    aria-labelledby="undeliveredSMSTAB">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th>Topic</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">Time Sent</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Emergency Meetings</td>
                                                            <td class="text-center">General</td>
                                                            <td class="text-center">Sat-Nov-20-2019-10:30PM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER-->
<!-- modal post -->
<div class="modal fade" id="postannouncement" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
    aria-hidden="true" data-backdrop="send">
    <div class="modal-dialog modal-m" role="document">
        <div class="modal-content" style="margin-top: 15%;">
            <form action="{{route('principal.post_announcement')}}" method="POST">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="postmodallabel">Post Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #f2f2f2;">
                    <div class="col-md-12">
                        <label for="topic">Topic</label>
                        <input style="font-size: 12px;" type="text" id="topic" name="topic" class="form-control"
                            placeholder="topic here. . .">
                    </div>
                    <div class="col-md-12">
                        <label for="topictype">Type</label>
                        <select style="font-size: 12px;" name="type" id="topictype" class="form-control myselect">
                            <option value="0">General</option>
                            <option value="1">Parent</option>
                            <option value="2">Teacher</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="content">Content</label>
                        <textarea style="font-size: 12px;" name="content" id="content" cols="30" rows="6"
                            class="form-control" placeholder="content here. . ."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Post</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal post -->
<!-- modal edit -->
<div class="modal fade" id="editannouncement" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
    aria-hidden="true" data-backdrop="send">
    <div class="modal-dialog modal-m" role="document">
        <div class="modal-content" style="margin-top: 15%;">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="postmodallabel">Edit Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #f2f2f2;">
                    <div class="col-md-12">
                        <label for="topic">Topic</label>
                        <input style="font-size: 12px;" type="text" id="topic" class="form-control"
                            value="SUSPENSION OF WORK AND CLASSES AT 3:00 PM TODAY APRIL 24, 2019">
                    </div>
                    <div class="col-md-12">
                        <label for="topictype">Type</label>
                        <select style="font-size: 12px;" name="" id="topictype" class="form-control myselect">
                            <option value="">General</option>
                            <option value="" selected>Teacher Only</option>
                            <option value="">Parent Only</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="content">Content</label>
                        <textarea style="font-size: 12px; text-align: justify;" name="content" id="content" rows="6"
                            class="form-control" placeholder="content here. . .">
    The celebration of the National Youth Day kicks off today at 2:00 p.m. and the procession from the City Sports Center to the Basilica del Sto. Niño has been scheduled at 6:00 p.m. However, the roads for the procession route will be closed earlier. Traffic congestion is expected because of the said activity.In this vein, work and classes will be until 3:00 this afternoon only due to the closure of some roads.

    Work and classes will resume tomorrow, April 25, 2019, except for the classes at the Lower Basic Education that have assigned non-contact activities to the students for the whole week.
                                </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
