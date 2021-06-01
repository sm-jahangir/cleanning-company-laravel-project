<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('backend')}}/images/logo.png"
                    srcset="{{asset('backend')}}/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('backend')}}/images/logo-dark.png"
                    srcset="{{asset('backend')}}/images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Pre-Built Pages</h6>
                    </li><!-- .nk-menu-heading -->
                    
                    @if (auth()->user()->can('admin-view') || auth()->user()->can('role-view')) 
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                <span class="nk-menu-text">User Manage</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @if (auth()->user()->can('admin-view')) 
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin.users.create') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">User Add</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin.users.index') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">User List</span></a>
                                    </li>
                                @endif
                                @if (auth()->user()->can('role-view')) 
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin.roles.create') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Role Add</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('admin.roles.index') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Role List</span></a>
                                    </li>
                                @endif

                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    @endif
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Tags</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.tags.create') }}" class="nk-menu-link"><span class="nk-menu-text">Tag Add</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.tags.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Tag List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Category</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.category.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Category Add</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.category.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Category List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                            <span class="nk-menu-text">Post</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.post.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Post Add</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.post.index') }}" class="nk-menu-link"><span class="nk-menu-text">Post List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.post.pending') }}" class="nk-menu-link"><span class="nk-menu-text">Post Pending</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                            <span class="nk-menu-text">Appointments</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.appoint')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Active Appoint</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.appoint')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Unapproved Appoint</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">Error Pages</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">404 Classic</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">504 Classic</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">404 Modern</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">504 Modern</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">Cleaners</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.cleaner.create')}}" class="nk-menu-link"><span class="nk-menu-text">Cleaner Add</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.cleaner.index')}}" class="nk-menu-link"><span class="nk-menu-text">Cleaners List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">Services</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.service.create')}}" class="nk-menu-link"><span class="nk-menu-text">Service Add</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.service.index')}}" class="nk-menu-link"><span class="nk-menu-text">Services List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Components</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                            <span class="nk-menu-text">Ui Elements</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/elements/alerts.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Alerts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/accordions.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Accordions</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/badges.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Badges</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/buttons.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Buttons</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/buttons-group.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Button Group</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/breadcrumb.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Breadcrumb</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/cards.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Cards</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/carousel.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Carousel</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/modals.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Modals</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/pagination.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Pagination</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/popover.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Popovers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/progress.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Progress</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/spinner.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Spinner</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/tabs.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Tabs</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/toast.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Toasts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/tooltip.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Tooltip</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/elements/typography.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Typography</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-text">Utilities</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/elements/util-border.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-colors.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-display.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-embeded.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-flex.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Flex</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-text.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Text</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-sizing.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-spacing.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/elements/util-others.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-dot-box"></em></span>
                            <span class="nk-menu-text">Crafted Icons</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/misc/svg-icons.html" class="nk-menu-link">
                                    <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/misc/nioicon.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                            <span class="nk-menu-text">Tables</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-basic.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Basic Tables</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-special.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Special
                                        Tables</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/tables/table-datatable.html" class="nk-menu-link"><span
                                        class="nk-menu-text">DataTables</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                            <span class="nk-menu-text">Forms</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-elements.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Elements</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-layouts.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Layouts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-validation.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Form
                                        Validation</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/forms/form-wizard.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Wizard Basic</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich
                                        Editor</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-quill.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Quill</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html"
                                            class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-pie"></em></span>
                            <span class="nk-menu-text">Charts</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/components/charts/chartjs.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Chart JS</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components/charts/knob.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Knob JS</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.comment.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-alert-circle"></em></span>
                            <span class="nk-menu-text">Comments</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.favorite.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-caution"></em></span>
                            <span class="nk-menu-text">Favorite Post List</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.subscibers.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                            <span class="nk-menu-text">Subscribers</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.settings.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li>
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
