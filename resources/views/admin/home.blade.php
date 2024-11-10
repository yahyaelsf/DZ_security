@extends('admin.layouts.dashboard')
@section('content')
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="kt-widget17">
            <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #9da2fd">
                <div class="kt-widget17__chart" style="height:100px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="kt_chart_activities" width="488" height="216" class="chartjs-render-monitor" style="display: block; width: 488px; height: 216px;"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{route('admin.contacts.index')}}">
															<span class="kt-widget17__icon">
																<i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        The number of unread messages
															</span>
                                    <span class="kt-widget17__desc">
															{{$contacts}}
															</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
