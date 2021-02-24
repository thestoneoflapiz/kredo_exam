@foreach($categories as $cat)
<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path: media/svg/icons/Communication/Add-user.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Bootstrap</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu menu-submenu-classic menu-submenu-right">
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/typography.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Typography</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/buttons.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Buttons</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/button-group.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Button Group</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/dropdown.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Dropdown</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/navs.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Navs</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/tables.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Tables</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/progress.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Progress</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/modal.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Modal</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/alerts.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Alerts</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/popover.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Popover</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="features/bootstrap/tooltip.html" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">Tooltip</span>
                </a>
            </li>
        </ul>
    </div>
</li>
@endforeach