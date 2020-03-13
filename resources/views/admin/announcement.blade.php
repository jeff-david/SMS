@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="container-fluid" style="margin-top: -22px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" id="posts"
                            data-target="#postannouncement">Post Announcement</button>
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
                                                            <td class="text-center">{{ Carbon\Carbon::parse($announcements->created_at)->format('m/d/Y')}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                                <button class="item sendannounce" title="Send" data-id="{{$announcements->id}}" data-type="{{$announcements->type_id}}" data-toggle="modal"
                                                        data-target="#sendModal">
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
                                                    @foreach($post_announcement as $post_announcements)
                                                        <tr style="font-size:12px">
                                                            <td>{{$post_announcements->title}}</td>
                                                            <td class="text-center">
                                                                @if($post_announcements->type_id == 2)
                                                                    Teacher  
                                                                @endif
                                                            </td>
                                                            @php
                                                                $time = \Carbon\Carbon::parse($announcements->updated_at)->toTimeString();
                                                                $total = strtotime($time) + 60*60*8 ;
                                                                $total_time = date('g:i a', $total);
                                                            @endphp
                                                            <td class="text-center">{{$total_time}}</td>
                                                        </tr>
                                                        @endforeach
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
            <div class="alert alert-danger" style="display:none"></div>
            <form method="POST" action="{{ route('admin.announcement') }}">
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
                        <input style="font-size: 12px;" type="text" name="topic" id="topic" class="form-control"
                            placeholder="topic here. . .">
                    </div>
                    <div class="col-md-12">
                        <label for="topictype">Recipient</label>
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
                    <button type="submit" class="btn btn-primary btn-block" id="post">Post</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal post -->


<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.post_notify')}}" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="LRN" id="LRN" />
                    <input type="hidden" name="type_id" id="type_id" />
                    <h5 class="modal-title" id="staticModalLabel">Are you sure you want send this announcement?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
