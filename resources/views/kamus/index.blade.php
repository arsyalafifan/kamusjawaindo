<?php
use App\enumVar as enum;
use App\Helpers\Get_field;
?>
@extends('layouts.master')

@section('content')

<div class="row">
    <form class="form-material">
        <div class="form-group row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <label for="search" class="col-md-12 col-form-label text-md-left">{{ __('Filter') }}</label>
                    </div>
                    <div class="col-md-9">
                        <input id="search" type="text" class="col-md-12 form-control" name="search" value="{{ old('search') }}" maxlength="100" autocomplete="search" placeholder="-- Filter --">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="row row-in">
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable table-striped" id="kamus-table">
                        <thead>
                            <tr>
                                <th>Bahasa Indonesia</th>
                                <th>Bahasa Jawa</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row -->
<!-- /.row -->
<div class="row">
    <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Yearly Sales</h3>
            <ul class="list-inline text-right">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iPhone</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>iPad</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>iPod</h5>
                </li>
            </ul>
            <div id="morris-area-chart" style="height: 340px;"></div>
        </div>
    </div>
    <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-theme-dark m-b-15">
                    <div class="row weather p-20">
                        <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 m-t-40">
                            <h3>&nbsp;</h3>
                            <h1>73<sup>°F</sup></h1>
                            <p class="text-white">AHMEDABAD, INDIA</p>
                        </div>
                        <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right"> <i class="wi wi-day-cloudy-high"></i>
                            <br/>
                            <br/>
                            <b class="text-white">SUNNEY DAY</b>
                            <p class="w-title-sub">April 14</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-theme m-b-15">
                    <div id="myCarouse2" class="carousel vcarousel slide p-20">
                        <!-- Carousel items -->
                        <div class="carousel-inner ">
                            <div class="active item">
                                <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                <div class="twi-user"><img src="../plugins/images/users/hritik.jpg" alt="user" class="img-circle img-responsive pull-left">
                                    <h4 class="text-white m-b-0">Govinda</h4>
                                    <p class="text-white">Actor</p>
                                </div>
                            </div>
                            <div class="item">
                                <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                <div class="twi-user"><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle img-responsive pull-left">
                                    <h4 class="text-white m-b-0">Govinda</h4>
                                    <p class="text-white">Actor</p>
                                </div>
                            </div>
                            <div class="item">
                                <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                <div class="twi-user"><img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle img-responsive pull-left">
                                    <h4 class="text-white m-b-0">Govinda</h4>
                                    <p class="text-white">Actor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row -->
<div class="row">
    <div class="col-md-12 col-lg-6 col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Recent Comments</h3>
            <div class="comment-center">
                <div class="comment-body">
                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                </div>
                <div class="comment-body">
                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                    <div class="mail-contnet">
                        <h5>Sonu Nigam</h5>
                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><span class="label label-rounded label-success">APPROVED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                </div>
                <div class="comment-body">
                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                    <div class="mail-contnet">
                        <h5>Arijit Sinh</h5>
                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                </div>
                <div class="comment-body b-none">
                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span> <a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6 col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Recent sales
<div class="col-md-3 col-sm-4 col-xs-6 pull-right">
<select class="form-control pull-right row b-none">
  <option>March 2017</option>
  <option>April 2017</option>
  <option>May 2017</option>
  <option>June 2017</option>
  <option>July 2017</option>
</select>
</div>
</h3>
            <div class="row sales-report">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <h2>March 2017</h2>
                    <p>SALES REPORT</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <h1 class="text-right text-success m-t-20">$3,690</h1>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>STATUS</th>
                            <th>DATE</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="txt-oflo">Elite admin</td>
                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                            <td class="txt-oflo">April 18</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Real Homes</td>
                            <td><span class="label label-info label-rounded">EXTENDED</span></td>
                            <td class="txt-oflo">April 19</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Medical Pro</td>
                            <td><span class="label label-danger label-rounded">TAX</span></td>
                            <td class="txt-oflo">April 20</td>
                            <td><span class="text-danger">-$24</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Hosting press</td>
                            <td><span class="label label-megna label-rounded">SALE</span></td>
                            <td class="txt-oflo">April 21</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Helping Hands</td>
                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                            <td class="txt-oflo">April 22</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Digital Agency</td>
                            <td><span class="label label-megna label-rounded">SALE</span> </td>
                            <td class="txt-oflo">April 23</td>
                            <td><span class="text-danger">-$14</span></td>
                        </tr>
                        <tr>
                            <td class="txt-oflo">Helping Hands</td>
                            <td><span class="label label-success label-rounded">MEMBER</span></td>
                            <td class="txt-oflo">April 22</td>
                            <td><span class="text-success">$64</span></td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Check all the sales</a> </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!--row -->
<div class="row">
    <div class="col-md-12 col-lg-9 col-sm-12 col-xs-12 pull-right">
        <div class="white-box">
            <h3 class="box-title">Sales Difference</h3>
            <ul class="list-inline text-right">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Site A View</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B View</h5>
                </li>
            </ul>
            <div id="morris-area-chart2" style="height: 370px;"></div>
        </div>
    </div>
    <div class="col-md-12 col-lg-3 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="white-box m-b-15">
                    <h3 class="box-title">Sales Difference</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                            <h1 class="text-info">$647</h1>
                            <p class="text-muted">APRIL 2017</p>
                            <b>(150 Sales)</b> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div id="sparkline2dash" class="text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="white-box bg-purple m-b-15">
                    <h3 class="text-white box-title">VISIT STATASTICS</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                            <h1 class="text-white">$347</h1>
                            <p class="light_op_text">APRIL 2017</p>
                            <b class="text-white">(150 Sales)</b> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div id="sales1" class="text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="white-box">
            <h3 class="box-title">To Do List</h3>
            <ul class="list-task list-group" data-role="tasklist">
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                        <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                    </div>
                </li>
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                        <label for="inputCall"> <span>Give Purchase report</span> <span class="label label-danger">Today</span> </label>
                    </div>
                </li>
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                        <label for="inputBook"> <span>Book flight for holiday</span> </label>
                    </div>
                </li>
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                        <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning">2 weeks</span> </label>
                    </div>
                </li>
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                        <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                    </div>
                </li>
                <li class="list-group-item" data-role="task">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                        <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="white-box">
            <h3 class="box-title">You have 5 new messages</h3>
            <div class="message-center">
                <a href="#">
                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                </a>
                <a href="#">
                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Sonu Nigam</h5>
                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                </a>
                <a href="#">
                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Arijit Sinh</h5>
                        <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                </a>
                <a href="#">
                    <div class="user-img"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Genelia Deshmukh</h5>
                        <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                </a>
                <a href="#" class="b-none">
                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="white-box">
            <h3 class="box-title">Chat</h3>
            <div class="chat-box">
                <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                    <li>
                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/sonu.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Sonu Nigam</h4>
                                <p> Hi, All! </p>
                                <b>10.00 am</b> </div>
                        </div>
                    </li>
                    <li class="odd">
                        <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Genelia</h4>
                                <p> Hi, How are you Sonu? ur next concert? </p>
                                <b>10.03 am</b> </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Ritesh</h4>
                                <p> Hi, Sonu and Genelia, </p>
                                <b>10.05 am</b> </div>
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Say something">
                            <span class="input-group-btn">
    <button class="btn btn-success" type="button">Send</button>
    </span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<script>
    let kamustable = $('#kamus-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            pageLength: 50,
            dom: 'Bfrtip',
            select: true,
            ordering: false,
            searching: false,
            language: {
                lengthMenu: "Menampilkan _MENU_ data per halaman",
                zeroRecords: "Tidak ada data",
                info: "Halaman _PAGE_ dari _PAGES_",
                infoEmpty: "Tidak ada data",
                infoFiltered: "(difilter dari _MAX_ data)",
                search: "Pencarian :",
                paginate: {
                    previous: "Sebelumnya",
                    next: "Selanjutnya",
                }
            },
            ajax: {
                url: "{{ route('kamus.index') }}",
                dataSrc: function (response) {
                    response.recordsTotal = response.data.count;
                    response.recordsFiltered = response.data.count;
                    return response.data.data;
                },
                data: function (d) {
                    return $.extend({}, d, {
                        // "unit": $("#unit").val().toLowerCase(),
                        // "kotaid": $("#kotaid").val().toLowerCase(),
                        // "kecamatanid": $("#kecamatanid").val().toLowerCase(),
                        // "jenjang": $("#jenjang").val().toLowerCase(),
                        // "sekolahid": $("#sekolahid").val().toLowerCase(),
                        // "jenis": $("#jenis").val().toLowerCase(),
                        // "filter_status": $("#filter_status").val().toLowerCase(),
                        // "filter_jenispeg": $("#filter_jenispeg").val().toLowerCase(),
                        "search": $("#search").val().toLowerCase()
                    });
                }
            },
            buttons: {
                buttons: [
                    
                ]
            },
            columns: [
                {
                    'orderData': 1,
                    data: 'indonesia',
                    render: function (data, type, row) {
                        if (row.indonesia && row.indonesia != null) {
                            return row.indonesia;
                        }
                        else {
                            return '-'
                        }
                    },
                    name: 'indonesia'
                },
                {
                    'orderData': 2,
                    data: 'jawa',
                    render: function(data, type, row){
                        if (row.jawa && row.jawa != null) {
                            return row.jawa;
                        }
                        else {
                            return '-'
                        }
                    },
                    name: 'jawa'
                },
            ],
            initComplete: function (settings, json) {
                $(".btn-datatable").removeClass("dt-button");
            },
            //order: [[1, 'asc']]
        });
</script>

@endsection