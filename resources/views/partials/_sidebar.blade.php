<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{route('home')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="home"></i>
                        <span>الرئيسيه</span>
                    </div>
                </a>
            </li>



            <li class="menu">
                <a href="{{route('users.index')}}" aria-expanded="{{request()->routeIs('client.*') ? 'true':'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="users"></i>
                        <span>المستخدمين</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="{{route('roles.index')}}" aria-expanded="{{request()->routeIs('client.*') ? 'true':'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="user-check"></i>
                        <span>الادوار</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('client.index')}}" aria-expanded="{{request()->routeIs('client.*') ? 'true':'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="user-plus"></i>

                        <span>العملاء</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="{{route('expensepayment.index')}}"
                   aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="shopping-bag"></i>
                        <span>مدفوعات المصاريف</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="{{route('lawyers.index')}}" aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="user-check"></i>
                        <span> المحامين</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('courts.index')}}" aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="codesandbox"></i>
                        <span>المحاكم</span>
                    </div>
                </a>
            </li>



            <li class="menu">
                <a href="{{route('typecourts.index')}}" aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="type"></i>
                        <span>نوع المحكمه</span>
                    </div>
                </a>
            </li>




            <li class="menu">
                <a href="{{route('statements.index')}}" aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="sunset"></i>
                        <span>تميز البيان</span>
                    </div>
                </a>
            </li>






            <li class="menu">
                <a href="{{route('stages.index')}}" aria-expanded="{{request()->routeIs('case.*') ? 'true' :'false'}}"
                   class="dropdown-toggle">
                    <div class="">
                        <i data-feather="grid"></i>
                        <span>مراحل التقاضي</span>
                    </div>
                </a>
            </li>




            <li class="menu">
                <a href="{{route('document.index')}}"
                   aria-expanded="{{request()->routeIs('document.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="file-text"></i>
                        <span>المستندات</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('payment.index')}}"
                   aria-expanded="{{request()->routeIs('payment.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="columns"></i>
                        <span>الدفعات</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('expense.index')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="briefcase"></i>
                        <span>المصروفات</span>
                    </div>
                </a>
            </li>



            <li class="menu">
                <a href="{{route('statuscases.index')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="map"></i>
                        <span>حاله الدعوه</span>
                    </div>
                </a>
            </li>


            <li class="sidebar-dropdown menu">
                <a href="{{route('ssesiots.index')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="film"></i>


                        <span>الجلسات</span>
                    </div>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>

                            <i data-feather="type"></i>


                            <a  href="{{route('typessesiots.index')}}">


                                نوع الجلسات
                            </a>

                        </li>
                        <li>
                            <i data-feather="layout"></i>
                            <a href="{{route('decisions.index')}}">قرارت الجلسه</a>

                        </li>

                    </ul>
                </div>
            </li>




            <li class="sidebar-dropdown menu">
                <a href="{{route('case.index')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="grid"></i>

                        <span>القضايا</span>
                    </div>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>

                            <i data-feather="type"></i>


                            <a  href="{{route('Typecases.index')}}">انواع القضايا</a>

                        </li>
                        <li>
                            <i data-feather="briefcase"></i>
                            <a href="{{route('expensecases.index')}}">مصروفات القضايا</a>

                        </li>
                        <li>
                            <i data-feather="package"></i>

                            <a  href="{{route('lawercases.index')}}">وضع القضيه</a>

                        </li>

                    </ul>
                </div>
            </li>


            <li class="menu">
                <a href="{{route('reports.index')}}"
                   aria-expanded="{{request()->routeIs('expense.*') ? 'true' :'false'}}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="layers"></i>
                        <span>رول المحكمه</span>
                    </div>
                </a>
            </li>





        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->
