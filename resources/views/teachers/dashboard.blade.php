@extends('teachers.layouts.app')

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
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                                Month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                                All time
                            </a>
                        </li>
                    </ul>
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
                    <div class="tab-pane" id="kt_widget5_tab2_content">
                        <div class="kt-widget5">
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product10.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Branding Mockup
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic bootstrap themes.
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Fly themes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">24,583</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">3809</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product11.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Awesome Mobile App
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic admin themes.Lorem Ipsum Amet
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Fly themes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">210,054</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">1103</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product6.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Great Logo Designn
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic admin themes.
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Keenthemes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">19,200</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">1046</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kt_widget5_tab3_content">
                        <div class="kt-widget5">
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product11.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Awesome Mobile App
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic admin themes.Lorem Ipsum Amet
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Fly themes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">210,054</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">1103</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product6.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Great Logo Designn
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic admin themes.
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Keenthemes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">19,200</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">1046</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__item">
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__pic">
                                        <img class="kt-widget7__img" src="assets/media/products/product10.jpg" alt="">
                                    </div>
                                    <div class="kt-widget5__section">
                                        <a href="#" class="kt-widget5__title">
                                            Branding Mockup
                                        </a>
                                        <p class="kt-widget5__desc">
                                            Metronic bootstrap themes.
                                        </p>
                                        <div class="kt-widget5__info">
                                            <span>Author:</span>
                                            <span class="kt-font-info">Fly themes</span>
                                            <span>Released:</span>
                                            <span class="kt-font-info">23.08.17</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__content">
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">24,583</span>
                                        <span class="kt-widget5__sales">sales</span>
                                    </div>
                                    <div class="kt-widget5__stats">
                                        <span class="kt-widget5__number">3809</span>
                                        <span class="kt-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Best Sellers-->
    </div>
@endsection
