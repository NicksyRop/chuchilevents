@extends('Admin.layouts.app')

@section('content')
                   <!--/.span3-->
                   <div class="span9">
                    <div class="content">
                        <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                    <p class="text-muted">
                                        Growth</p>
                                </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>{{$users->count()}}</b>
                                    <p class="text-muted">
                                        New Users</p>
                                </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                    <p class="text-muted">
                                        Profit</p>
                                </a>
                            </div>
                            <div class="btn-box-row row-fluid">
                                <div class="span8">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                            </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                            </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                            </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                            </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                Rate</b> </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/#btn-controls-->


                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->


@endsection
