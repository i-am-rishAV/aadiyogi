<div class="sidebar px-4 py-4 py-md-5 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <svg width="35" height="35" fill="currentColor" class="bi bi-clipboard-check"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                    </span>
                    <span class="logo-text">AadiYogi</span>
                </a>
                <!-- Menu: main ul -->

                <ul class="menu-list flex-grow-1 mt-3">
                    <li class="collapsed">
                        <a class="m-link active" href="index.php">
                            <i class="icofont-home fs-5"></i> <span>Dashboard</span></a>
                        <!-- Menu: Sub menu ul -->

                    </li>



                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                                class="icofont-user-male"></i> <span>Trainer & class </span> <span
                                class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="client-Components">
                            <li><a class="ms-link" href="class.php"> <span>Class</span></a></li>
                            <li><a class="ms-link" href="trainer.php"> <span>Trainers</span></a></li>
                        </ul>
                    </li>

                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                                class="icofont-ui-settings"></i> <span>Service & price</span> <span
                                class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="emp-Components">
                            <li><a class="ms-link" href="service.php"> <span>Service</span></a></li>

                            <li><a class="ms-link" href="price.php"> <span>price</span></a></li>

                        </ul>
                    </li>

                    <li class="collapsed">
                        <a class="m-link" href="blog.php">
                            <i class="icofont-ui-edit fs-5"></i> <span>Blog</span></a>

                    </li>

                    <li class="collapsed">
                        <a class="m-link " href="pose.php">
                            <i class="icofont-aim fs-5"></i> <span>Pose</span></a>

                    </li>

                    <li class="collapsed mb-5">
                        <a class="m-link " href="contact.php">
                            <i class="icofont-ui-chat fs-5"></i> <span>visitors messages</span></a>

                    </li>




                    <!-- Theme: Switch Theme -->
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center justify-content-center">
                            <div class="form-check form-switch theme-switch">
                                <input class="form-check-input" type="checkbox" id="theme-switch">
                                <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-center">
                            <div class="form-check form-switch theme-rtl">
                                <input class="form-check-input" type="checkbox" id="theme-rtl">
                                <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                            </div>
                        </li>
                    </ul>

                    <!-- Menu: menu collepce btn -->
                    <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                        <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                    </button>
            </div>
        </div>