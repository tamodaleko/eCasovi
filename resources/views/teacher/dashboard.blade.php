@extends('teacher.layouts.app')

@section('content')
<!--Begin::Row-->
<div class="row">
    <div class="col-xl-8 col-lg-12 order-lg-3 order-xl-1">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Your Top Students
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                        <div class="kt-widget5">
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <span class="kt-media kt-media--xl kt-media--brand kt-margin-r-5 kt-margin-t-5">
                                            <span>MS</span>
                                        </span>
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Marko Savic
                                        </a>
                                        <p class="kt-widget5__desc">
                                            03/11/1989
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Subject:</span>
                                            <span class="kt-font-info">Math</span>
                                            <span>Sessions:</span>
                                            <span class="kt-font-info">15</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">RSD 24,583</span>
                                        <span class="kt-widget5__sales">earnings</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <span class="kt-media kt-media--xl kt-media--danger kt-margin-r-5 kt-margin-t-5">
                                            <span>KS</span>
                                        </span>
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Kristina Stevanovic
                                        </a>
                                        <p class="kt-widget5__desc">
                                            04/05/1993
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Subject:</span>
                                            <span class="kt-font-info">English</span>
                                            <span>Sessions:</span>
                                            <span class="kt-font-info">13</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">RSD 17,500</span>
                                        <span class="kt-widget5__sales">earnings</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <span class="kt-media kt-media--xl kt-media--brand kt-margin-r-5 kt-margin-t-5">
                                            <span>NN</span>
                                        </span>
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Nemanja Nedic
                                        </a>
                                        <p class="kt-widget5__desc">
                                            28/02/1990
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Subject:</span>
                                            <span class="kt-font-info">Biology</span>
                                            <span>Sessions:</span>
                                            <span class="kt-font-info">5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">RSD 210,054</span>
                                        <span class="kt-widget5__sales">earnings</span>
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
@endsection
