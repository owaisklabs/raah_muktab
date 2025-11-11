@extends('ui.layouts.simple.master')

@section('title', 'Default')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">index</li>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row second-chart-list third-news-update">
            <div class="col-xl-4 col-md-12 box-col-12">
                <div class="card o-hidden">
                    <div class="chart-widget-top">
                        <div class="row card-body">
                            <div class="col-5">
                                <h6 class="f-w-600 font-primary">SALE</h6>
                                <span class="num"><span class="counter">90</span>%<i
                                        class="icon-angle-up f-12 ms-1"></i></span>
                            </div>
                            <div class="col-7 text-end">
                                <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <div id="chart-widget1" style="min-height: 185px;">
                                <div id="apexcharts3420i7d" class="apexcharts-canvas apexcharts3420i7d light zoomable"
                                    style="width: 379px; height: 170px;"><svg id="SvgjsSvg4792" width="379"
                                        height="170" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG4794" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 30)">
                                            <defs id="SvgjsDefs4793">
                                                <clipPath id="gridRectMask3420i7d">
                                                    <rect id="SvgjsRect4807" width="383" height="144" x="-2"
                                                        y="-2" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                                    </rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask3420i7d">
                                                    <rect id="SvgjsRect4808" width="381" height="142" x="-1"
                                                        y="-1" rx="0" ry="0" fill="#ffffff"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                                    </rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient4814" x1="0" y1="0"
                                                    x2="0" y2="1">
                                                    <stop id="SvgjsStop4815" stop-opacity="0.8"
                                                        stop-color="rgba(115,102,255,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop4816" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                    <stop id="SvgjsStop4817" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine4798" x1="0" y1="0" x2="0"
                                                y2="140" stroke="#b6b6b6" stroke-dasharray="3"
                                                class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                height="140" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                stroke-width="1"></line>
                                            <g id="SvgjsG4820" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG4821" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG4830" class="apexcharts-grid">
                                                <line id="SvgjsLine4832" x1="0" y1="140" x2="379"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine4831" x1="0" y1="1" x2="0"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG4810" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG4811" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath4818"
                                                        d="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        fill="url(#SvgjsLinearGradient4814)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <path id="SvgjsPath4819"
                                                        d="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        fill="none" fill-opacity="1" stroke="#7366ff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <g id="SvgjsG4812" class="apexcharts-series-markers-wrap">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle4838" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wmq5wbu9j no-pointer-events"
                                                                stroke="#ffffff" fill="#7366ff" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG4813" class="apexcharts-datalabels"></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine4833" x1="0" y1="0" x2="379"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine4834" x1="0" y1="0" x2="379"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG4835" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG4836" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG4837" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect4839" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect4840" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect4797" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        <g id="SvgjsG4822" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-21, 0)">
                                            <g id="SvgjsG4823" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4824"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="31.5" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="regular" fill="#373d3f"
                                                    class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">15</text><text
                                                    id="SvgjsText4825" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="59.6" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">12</text><text
                                                    id="SvgjsText4826" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="87.7" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">9</text><text
                                                    id="SvgjsText4827" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="115.80000000000001" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">6</text><text
                                                    id="SvgjsText4828" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="143.9" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">3</text><text
                                                    id="SvgjsText4829" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="172" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">0</text></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(115, 102, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 380px; height: 186px;">
                                    </div>
                                </div>
                                <div class="contract-trigger">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 box-col-12">
                <div class="card o-hidden">
                    <div class="chart-widget-top">
                        <div class="row card-body">
                            <div class="col-5">
                                <h6 class="f-w-600 font-primary">SALE</h6>
                                <span class="num"><span class="counter">90</span>%<i
                                        class="icon-angle-up f-12 ms-1"></i></span>
                            </div>
                            <div class="col-7 text-end">
                                <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <div id="chart-widget1" style="min-height: 185px;">
                                <div id="apexcharts3420i7d" class="apexcharts-canvas apexcharts3420i7d light zoomable"
                                    style="width: 379px; height: 170px;"><svg id="SvgjsSvg4792" width="379"
                                        height="170" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG4794" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 30)">
                                            <defs id="SvgjsDefs4793">
                                                <clipPath id="gridRectMask3420i7d">
                                                    <rect id="SvgjsRect4807" width="383" height="144"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask3420i7d">
                                                    <rect id="SvgjsRect4808" width="381" height="142"
                                                        x="-1" y="-1" rx="0" ry="0"
                                                        fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient4814" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop4815" stop-opacity="0.8"
                                                        stop-color="rgba(115,102,255,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop4816" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                    <stop id="SvgjsStop4817" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine4798" x1="0" y1="0" x2="0"
                                                y2="140" stroke="#b6b6b6" stroke-dasharray="3"
                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="140" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG4820" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG4821" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG4830" class="apexcharts-grid">
                                                <line id="SvgjsLine4832" x1="0" y1="140" x2="379"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine4831" x1="0" y1="1" x2="0"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG4810" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG4811" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath4818"
                                                        d="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        fill="url(#SvgjsLinearGradient4814)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <path id="SvgjsPath4819"
                                                        d="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        fill="none" fill-opacity="1" stroke="#7366ff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <g id="SvgjsG4812" class="apexcharts-series-markers-wrap">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle4838" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wmq5wbu9j no-pointer-events"
                                                                stroke="#ffffff" fill="#7366ff" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG4813" class="apexcharts-datalabels"></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine4833" x1="0" y1="0" x2="379"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine4834" x1="0" y1="0" x2="379"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG4835" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG4836" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG4837" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect4839" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect4840" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect4797" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        <g id="SvgjsG4822" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-21, 0)">
                                            <g id="SvgjsG4823" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4824"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="31.5" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="regular" fill="#373d3f"
                                                    class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">15</text><text
                                                    id="SvgjsText4825" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="59.6" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">12</text><text
                                                    id="SvgjsText4826" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="87.7" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">9</text><text
                                                    id="SvgjsText4827" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="115.80000000000001" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">6</text><text
                                                    id="SvgjsText4828" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="143.9" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">3</text><text
                                                    id="SvgjsText4829" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="172" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">0</text></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(115, 102, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 380px; height: 186px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 box-col-12">
                <div class="card o-hidden">
                    <div class="chart-widget-top">
                        <div class="row card-body">
                            <div class="col-5">
                                <h6 class="f-w-600 font-primary">SALE</h6>
                                <span class="num"><span class="counter">90</span>%<i
                                        class="icon-angle-up f-12 ms-1"></i></span>
                            </div>
                            <div class="col-7 text-end">
                                <h4 class="num total-value">$ <span class="counter">3654</span>.00</h4>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <div id="chart-widget1" style="min-height: 185px;">
                                <div id="apexcharts3420i7d" class="apexcharts-canvas apexcharts3420i7d light zoomable"
                                    style="width: 379px; height: 170px;"><svg id="SvgjsSvg4792" width="379"
                                        height="170" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG4794" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 30)">
                                            <defs id="SvgjsDefs4793">
                                                <clipPath id="gridRectMask3420i7d">
                                                    <rect id="SvgjsRect4807" width="383" height="144"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask3420i7d">
                                                    <rect id="SvgjsRect4808" width="381" height="142"
                                                        x="-1" y="-1" rx="0" ry="0"
                                                        fill="#ffffff" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient4814" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop4815" stop-opacity="0.8"
                                                        stop-color="rgba(115,102,255,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop4816" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                    <stop id="SvgjsStop4817" stop-opacity="0.2"
                                                        stop-color="rgba(171,163,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine4798" x1="0" y1="0" x2="0"
                                                y2="140" stroke="#b6b6b6" stroke-dasharray="3"
                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="140" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG4820" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG4821" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG4830" class="apexcharts-grid">
                                                <line id="SvgjsLine4832" x1="0" y1="140" x2="379"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine4831" x1="0" y1="1" x2="0"
                                                    y2="140" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG4810" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG4811" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath4818"
                                                        d="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        fill="url(#SvgjsLinearGradient4814)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 140L 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314C 379 9.333333333333314 379 9.333333333333314 379 140M 379 9.333333333333314z"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <path id="SvgjsPath4819"
                                                        d="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        fill="none" fill-opacity="1" stroke="#7366ff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask3420i7d)"
                                                        pathTo="M 0 102.66666666666666C 30.611538461538455 102.66666666666666 56.849999999999994 121.33333333333333 87.46153846153845 121.33333333333333C 107.86923076923077 121.33333333333333 125.36153846153846 74.66666666666666 145.76923076923077 74.66666666666666C 166.17692307692306 74.66666666666666 183.66923076923075 65.33333333333333 204.07692307692307 65.33333333333333C 224.48461538461538 65.33333333333333 241.97692307692307 46.66666666666666 262.38461538461536 46.66666666666666C 282.79230769230765 46.66666666666666 300.2846153846154 28 320.6923076923077 28C 341.09999999999997 28 358.5923076923077 9.333333333333314 379 9.333333333333314"
                                                        pathFrom="M -1 140L -1 140L 87.46153846153845 140L 145.76923076923077 140L 204.07692307692307 140L 262.38461538461536 140L 320.6923076923077 140L 379 140">
                                                    </path>
                                                    <g id="SvgjsG4812" class="apexcharts-series-markers-wrap">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle4838" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wmq5wbu9j no-pointer-events"
                                                                stroke="#ffffff" fill="#7366ff" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG4813" class="apexcharts-datalabels"></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine4833" x1="0" y1="0" x2="379"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine4834" x1="0" y1="0" x2="379"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG4835" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG4836" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG4837" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect4839" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect4840" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" fill="#fefefe"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect4797" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                        <g id="SvgjsG4822" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-21, 0)">
                                            <g id="SvgjsG4823" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4824"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="31.5" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="regular" fill="#373d3f"
                                                    class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">15</text><text
                                                    id="SvgjsText4825" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="59.6" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">12</text><text
                                                    id="SvgjsText4826" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="87.7" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">9</text><text
                                                    id="SvgjsText4827" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="115.80000000000001" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">6</text><text
                                                    id="SvgjsText4828" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="143.9" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">3</text><text
                                                    id="SvgjsText4829" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="172" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                    fill="#373d3f" class="apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">0</text></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(115, 102, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 380px; height: 186px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg></div>
                            <div class="media-body">
                                <span class="m-0">Earnings</span>
                                <h4 class="mb-0 counter">6659</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-database icon-bg">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg></div>
                            <div class="media-body">
                                <span class="m-0">Earnings</span>
                                <h4 class="mb-0 counter">6659</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-database icon-bg">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg></div>
                            <div class="media-body">
                                <span class="m-0">Earnings</span>
                                <h4 class="mb-0 counter">6659</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-database icon-bg">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg></div>
                            <div class="media-body">
                                <span class="m-0">Earnings</span>
                                <h4 class="mb-0 counter">6659</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-database icon-bg">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
			<div class="card o-hidden profile-greeting">
				<div class="card-body">
					<div class="media">
						<div class="badge-groups w-100">
							<div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
							<div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
						</div>
					</div>
					<div class="greeting-user text-center">
						<div class="profile-vector"><img class="img-fluid" src="{{asset('assets/images/dashboard/welcome.png')}}" alt=""></div>
						<h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
						<p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span></p>
						<div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
						<div class="left-icon"><i class="fa fa-bell"> </i></div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
			<div class="card earning-card">
				<div class="card-body p-0">
					<div class="row m-0">
						<div class="col-xl-3 earning-content p-0">
							<div class="row m-0 chart-left">
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>Dashboard</h5>
									<p class="font-roboto">Overview of last month</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>$4055.56 </h5>
									<p class="font-roboto">This Month Earning</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>$1004.11</h5>
									<p class="font-roboto">This Month Profit</p>
								</div>
								<div class="col-xl-12 p-0 left_side_earning">
									<h5>90%</h5>
									<p class="font-roboto">This Month Sale</p>
								</div>
								<div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
							</div>
						</div>
						<div class="col-xl-9 p-0">
							<div class="chart-right">
								<div class="row m-0 p-tb">
									<div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
										<div class="inner-top-left">
											<ul class="d-flex list-unstyled">
												<li>Daily</li>
												<li class="active">Weekly</li>
												<li>Monthly</li>
												<li>Yearly</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
										<div class="inner-top-right">
											<ul class="d-flex list-unstyled justify-content-end">
												<li>Online</li>
												<li>Store</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="card-body p-0">
											<div class="current-sale-container">
												<div id="chart-currently"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row border-top m-0">
								<div class="col-xl-4 ps-0 col-md-6 col-sm-6">
									<div class="media p-0">
										<div class="media-left"><i class="icofont icofont-crown"></i></div>
										<div class="media-body">
											<h6>Referral Earning</h6>
											<p>$5,000.20</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-sm-6">
									<div class="media p-0">
										<div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
										<div class="media-body">
											<h6>Cash Balance</h6>
											<p>$2,657.21</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-12 pe-0">
									<div class="media p-0">
										<div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
										<div class="media-body">
											<h6>Sales forcasting</h6>
											<p>$9,478.50     </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
            <div class="col-xl-12 xl-100 chart_data_left box-col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0 chart-main">
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1001</h4>
                                            <span>purchase </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart1 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1005</h4>
                                            <span>Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>100</h4>
                                            <span>Sales return</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>101</h4>
                                            <span>Purchase ret</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-25 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4>
                                <span>Purchase Order Value</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-25 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4>
                                <span>Purchase Order Value</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-25 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4>
                                <span>Purchase Order Value</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-25 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4>
                                <span>Purchase Order Value</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 xl-50 chart_data_right second d-none">
			<div class="card">
				<div class="card-body">
					<div class="media align-items-center">
						<div class="media-body right-chart-content">
							<h4>$95,000<span class="new-box">New</span></h4>
							<span>Product Order Value</span>
						</div>
						<div class="knob-block text-center">
							<input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
						</div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 xl-50 news box-col-6">
			<div class="card">
				<div class="card-header">
					<div class="header-top">
						<h5 class="m-0">News & Update</h5>
						<div class="card-header-right-icon">
							<select class="button btn btn-primary">
								<option>Today</option>
								<option>Tomorrow</option>
								<option>Yesterday</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-body p-0">
					<div class="news-update">
						<h6>36% off For pixel lights Couslations Types.</h6>
						<span>Lorem Ipsum is simply dummy...</span>
					</div>
					<div class="news-update">
						<h6>We are produce new product this</h6>
						<span> Lorem Ipsum is simply text of the printing... </span>
					</div>
					<div class="news-update">
						<h6>50% off For COVID Couslations Types.</h6>
						<span>Lorem Ipsum is simply dummy...</span>
					</div>
				</div>
				<div class="card-footer">
					<div class="bottom-btn"><a href="#">More...</a></div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 xl-50 appointment-sec box-col-6">
			<div class="row">
				<div class="col-xl-12 appointment">
					<div class="card">
						<div class="card-header card-no-border">
							<div class="header-top">
								<h5 class="m-0">appointment</h5>
								<div class="card-header-right-icon">
									<select class="button btn btn-primary">
										<option>Today</option>
										<option>Tomorrow</option>
										<option>Yesterday</option>
									</select>
								</div>
							</div>
						</div>
						<div class="card-body pt-0">
							<div class="appointment-table table-responsive">
								<table class="table table-bordernone">
									<tbody>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
											<td>
												<p class="m-0 font-primary">28 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
										<tr>
											<td>
												<img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
												<div class="status-circle bg-primary"></div>
											</td>
											<td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
											<td>
												<p class="m-0 font-primary">22 Sept</p>
											</td>
											<td class="text-end">
												<div class="button btn btn-danger">Pending<i class="fa fa-check-circle ms-2"></i></div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 alert-sec">
					<div class="card bg-img">
						<div class="card-header">
							<div class="header-top">
								<h5 class="m-0">Alert  </h5>
								<div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
							</div>
						</div>
						<div class="card-body">
							<div class="body-bottom">
								<h6>  10% off For drama lights Couslations...</h6>
								<span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by  </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 xl-50 notification box-col-6">
			<div class="card">
				<div class="card-header card-no-border">
					<div class="header-top">
						<h5 class="m-0">notification</h5>
						<div class="card-header-right-icon">
							<select class="button btn btn-primary">
								<option>Today</option>
								<option>Tomorrow</option>
								<option>Yesterday</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-body pt-0">
					<div class="media">
						<div class="media-body">
							<p>20-04-2020 <span>10:10</span></p>
							<h6>Updated Product<span class="dot-notification"></span></h6>
							<span>Quisque a consequat ante sit amet magna...</span>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<p>20-04-2020<span class="ps-1">Today</span><span class="badge badge-secondary">New</span></p>
							<h6>Tello just like your product<span class="dot-notification"></span></h6>
							<span>Quisque a consequat ante sit amet magna... </span>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<div class="d-flex mb-3">
								<div class="inner-img"><img class="img-fluid" src="{{asset('assets/images/notification/1.jpg')}}" alt="Product-1"></div>
								<div class="inner-img"><img class="img-fluid" src="{{asset('assets/images/notification/2.jpg')}}" alt="Product-2"></div>
							</div>
							<span class="mt-3">Quisque a consequat ante sit amet magna...</span>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 xl-50 appointment box-col-6">
			<div class="card">
				<div class="card-header">
					<div class="header-top">
						<h5 class="m-0">Market Value</h5>
						<div class="card-header-right-icon">
							<select class="button btn btn-primary">
								<option>Year</option>
								<option>Month</option>
								<option>Day</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-Body">
					<div class="radar-chart">
						<div id="marketchart">       </div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 xl-100 chat-sec box-col-6">
			<div class="card chat-default">
				<div class="card-header card-no-border">
					<div class="media media-dashboard">
						<div class="media-body">
							<h5 class="mb-0">Live Chat</h5>
						</div>
						<div class="icon-box"><i class="fa fa-ellipsis-h"></i></div>
					</div>
				</div>
				<div class="card-body chat-box">
					<div class="chat">
						<div class="media left-side-chat">
							<div class="media-body d-flex">
								<div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
								<div class="main-chat">
									<div class="message-main"><span class="mb-0">Hi deo, Please send me link.</span></div>
									<div class="sub-message message-main"><span class="mb-0">Right Now</span></div>
								</div>
							</div>
							<p class="f-w-400">7:28 PM</p>
						</div>
						<div class="media right-side-chat">
							<p class="f-w-400">7:28 PM</p>
							<div class="media-body text-end">
								<div class="message-main pull-right">
									<span class="mb-0 text-start">How can do for you</span>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="media left-side-chat">
							<div class="media-body d-flex">
								<div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
								<div class="main-chat">
									<div class="sub-message message-main mt-0"><span>It's argenty</span></div>
								</div>
							</div>
							<p class="f-w-400">7:28 PM</p>
						</div>
						<div class="media right-side-chat">
							<div class="media-body text-end">
								<div class="message-main pull-right"><span class="loader-span mb-0 text-start" id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></span></div>
							</div>
						</div>
						<div class="input-group">
							<input class="form-control" id="mail" type="text" placeholder="Type Your Message..." name="text">
							<div class="send-msg"><i data-feather="send"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
            {{-- <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
			<div class="card gradient-primary o-hidden">
				<div class="card-body">
					<div class="setting-dot">
						<div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
					</div>
					<div class="default-datepicker">
						<div class="datepicker-here" data-language="en"></div>
					</div>
					<span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
				</div>
			</div>
		</div> --}}
        </div>
    </div>
    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
@endsection
