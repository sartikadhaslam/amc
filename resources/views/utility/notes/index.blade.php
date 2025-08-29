<x-app-layout>
<!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!--  BEGIN BREADCRUMBS  -->
                <div class="secondary-nav">
                    <div class="breadcrumbs-container" data-page-heading="Analytics">
                        <header class="header navbar navbar-expand-sm">
                            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                            <div class="d-flex breadcrumb-content">
                                <div class="page-header">

                                    <div class="page-title">
                                    </div>
                    
                                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">App</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Notes</li>
                                        </ol>
                                    </nav>
                    
                                </div>
                            </div>
                            <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                                <li class="nav-item more-dropdown">
                                    <div class="dropdown  custom-dropdown-icon">
                                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Settings</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down custom-dropdown-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </a>
                    
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">

                                            <a class="dropdown-item" data-value="Settings" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-settings&quot;><circle cx=&quot;12&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><path d=&quot;M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z&quot;></path></svg>" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings
                                            </a>

                                            <a class="dropdown-item" data-value="Mail" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-mail&quot;><path d=&quot;M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z&quot;></path><polyline points=&quot;22,6 12,13 2,6&quot;></polyline></svg>" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mail
                                            </a>

                                            <a class="dropdown-item" data-value="Print" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-printer&quot;><polyline points=&quot;6 9 6 2 18 2 18 9&quot;></polyline><path d=&quot;M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2&quot;></path><rect x=&quot;6&quot; y=&quot;14&quot; width=&quot;12&quot; height=&quot;8&quot;></rect></svg>" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print
                                            </a>

                                            <a class="dropdown-item" data-value="Download" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-download&quot;><path d=&quot;M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4&quot;></path><polyline points=&quot;7 10 12 15 17 10&quot;></polyline><line x1=&quot;12&quot; y1=&quot;15&quot; x2=&quot;12&quot; y2=&quot;3&quot;></line></svg>" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download
                                            </a>

                                            <a class="dropdown-item" data-value="Share" data-icon="<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; class=&quot;feather feather-share-2&quot;><circle cx=&quot;18&quot; cy=&quot;5&quot; r=&quot;3&quot;></circle><circle cx=&quot;6&quot; cy=&quot;12&quot; r=&quot;3&quot;></circle><circle cx=&quot;18&quot; cy=&quot;19&quot; r=&quot;3&quot;></circle><line x1=&quot;8.59&quot; y1=&quot;13.51&quot; x2=&quot;15.42&quot; y2=&quot;17.49&quot;></line><line x1=&quot;15.41&quot; y1=&quot;6.51&quot; x2=&quot;8.59&quot; y2=&quot;10.49&quot;></line></svg>" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share
                                            </a>
                                            
                                        </div>
                    
                                    </div>
                                </li>
                            </ul>
                        </header>
                    </div>
                </div>
                <!--  END BREADCRUMBS  -->
                
                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>

                        <div class="app-container">
                            
                            <div class="app-note-container">

                                <div class="app-note-overlay"></div>

                                <div class="tab-title">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12 mb-5">
                                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions active" id="all-notes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> All Notes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions" id="note-fav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Favourites</a>
                                                </li>
                                            </ul>

                                            <hr/>

                                            <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> Tags</p>

                                            <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-primary" id="note-personal">Personal</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-warning" id="note-work">Work</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-success" id="note-social">Social</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-danger" id="note-important">Important</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 text-center">
                                            <a id="btn-add-notes" class="btn btn-secondary w-100" href="javascript:void(0);">Add Note</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="ct" class="note-container note-grid">
                                    
                                    <div class="note-item all-notes note-social">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Meeting with Kelly">Meeting with Kelly</p>
                                                <p class="meta-time">07 May</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.">Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes note-fav note-personal">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Receive Package">Receive Package</p>
                                                <p class="meta-time">01 May</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.">Facilisis curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes note-work">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Imporant Infomation">Download Docs</p>
                                                <p class="meta-time">28 April</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.">Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Meeting Scheduled at 4:50pm">Meeting at 4:50pm</p>
                                                <p class="meta-time">20 April</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Excepteur sint occaecat cupidatat non proident, anim id est laborum.">Excepteur sint occaecat cupidatat non proident, anim id est laborum.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Backup Files EOD">Backup Files EOD</p>
                                                <p class="meta-time">17 April</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Maecenas condimentum neque mollis, egestas leo ut, gravida.">Maecenas condimentum neque mollis, egestas leo ut, gravida.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes note-social">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Download Server Logs">Download Server Logs</p>
                                                <p class="meta-time">10 April</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Suspendisse efficitur diam quis gravida. Nunc molestie est eros.">Suspendisse efficitur diam quis gravida. Nunc molestie est eros.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Team meet at Starbucks">Team meet at Starbucks</p>
                                                <p class="meta-time">05 April</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.">Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="note-item all-notes note-important">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="Create new users Profile">Create new users Profile</p>
                                                <p class="meta-time">31 Mar</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="Duis aute irure dolor in voluptate nulla pariatur.">Duis aute irure  in nulla pariatur. Etiam a odio eget enim aliquet</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">Add Task</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <div class="notes-box">
                                            <div class="notes-content">  

                                                <form action="javascript:void(0);" id="notesMailModalTitle">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex note-title">
                                                                <input type="text" id="n-title" class="form-control" maxlength="25" placeholder="Title">
                                                            </div>
                                                            <span class="validation-text"></span>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="d-flex note-description">
                                                                <textarea id="n-description" class="form-control" maxlength="60" placeholder="Description" rows="3"></textarea>
                                                            </div>
                                                            <span class="validation-text"></span>
                                                            <span class="d-inline-block mt-1 text-danger">Maximum Limit 60 characters</span>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn-n-save" class="float-left btn">Save</button>
                                        <button class="btn" data-bs-dismiss="modal">Discard</button>
                                        <button id="btn-n-add" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            
        </div>
        
        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper mt-0">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2025</span> <a target="_blank" href="https://amc-69.my.id">AMC-69</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->
    </div>
    <!--  END CONTENT AREA  -->
  
</x-app-layout>
