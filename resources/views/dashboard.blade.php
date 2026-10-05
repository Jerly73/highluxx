<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HIGHLUXX Dashboard</title>

    @vite('resources/css/dashboard.css')
</head>

<body>

<div class="dashboard">


    <aside class="sidebar">

        <div class="brand">
            <div class="brand-logo">
                HIGH<span>LUXX</span>
            </div>

            <div class="brand-subtitle">
                AUTO CARE CENTER
            </div>
        </div>

                <nav>
            <a href="{{ url('/dashboard') }}"
            class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <span>⌂</span>
                Dashboard
            </a>

            <a href="{{ url('/parts-locator') }}"
            class="nav-item {{ request()->is('parts-locator') ? 'active' : '' }}">
                <span>⌕</span>
                Parts Locator
            </a>

            <a href="{{ url('/availability') }}"
            class="nav-item {{ request()->is('availability') ? 'active' : '' }}">
                <span>▣</span>
                Availability Monitoring
            </a>

            <a href="{{ url('/parts-information') }}"
            class="nav-item {{ request()->is('parts-information') ? 'active' : '' }}">
                <span>▤</span>
                Parts Information
            </a>

            <div class="divider"></div>

            <a href="{{ url('/reports') }}"
            class="nav-item {{ request()->is('reports') ? 'active' : '' }}">
                <span class="icon">▧</span>
                Reports
            </a>

            <a href="{{ url('/settings') }}"
            class="nav-item {{ request()->is('settings') ? 'active' : '' }}">
                <span class="icon">⚙</span>
                Settings
            </a>
        </nav>

    </aside>


    
    <main class="main">

    
        <header class="topbar">

    <div></div>

    <div class="topbar-right">

        <!-- NOTIFICATION -->
        <div class="notification-wrapper">

            <button
                type="button"
                class="notification-btn"
                onclick="toggleNotifications(event)"
            >
                🔔
                <span class="notification-badge">3</span>
            </button>

            <div class="notification-dropdown" id="notificationDropdown">

                <div class="notification-header">
                    <strong>Notifications</strong>
                    <span>3 new</span>
                </div>

                <div class="notification-item">
                    <div class="notification-icon low">!</div>

                    <div>
                        <strong>Low Stock Alert</strong>
                        <p>Oil Filter is low in stock.</p>
                        <small>2 hours ago</small>
                    </div>
                </div>

                <div class="notification-item">
                    <div class="notification-icon out">×</div>

                    <div>
                        <strong>Out of Stock</strong>
                        <p>Air Filter is out of stock.</p>
                        <small>3 hours ago</small>
                    </div>
                </div>

                <div class="notification-item">
                    <div class="notification-icon new">+</div>

                    <div>
                        <strong>New Stock Added</strong>
                        <p>Brake Pad was added.</p>
                        <small>5 hours ago</small>
                    </div>
                </div>

            </div>

        </div>


        <!-- PROFILE BUTTON -->
        <button
            type="button"
            class="profile-button"
            onclick="toggleProfile(event)"
        >

            <div class="profile-circle">
                JD
            </div>

            <div class="profile-info">
                <strong>Juan Dela Cruz</strong>
                <small>Branch Manager</small>
            </div>

            <span class="dropdown">⌄</span>

        </button>


        <!-- PROFILE DETAILS -->
        <div class="profile-menu" id="profileMenu">

            <div class="profile-header">

                <div class="profile-circle large">
                    JD
                </div>

                <div>
                    <strong>Juan Dela Cruz</strong>
                    <small>Branch Manager</small>
                </div>

            </div>


            <div class="profile-details">

                <div>
                    <span>Email</span>
                    <strong>juan.delacruz@highluxx.com</strong>
                </div>

                <div>
                    <span>Position</span>
                    <strong>Branch Manager</strong>
                </div>

                <div>
                    <span>Branch</span>
                    <strong>HIGHLUXX Auto Care Center</strong>
                </div>

            </div>


            <a href="{{ url('/settings') }}" class="profile-settings">
                ⚙ Account Settings
            </a>

        </div>

    </div>

</header>


        
        <section class="content">

            <div class="page-title">
                <h1>Dashboard</h1>
                <p>Welcome, Branch Manager!</p>
            </div>


            

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-icon dark">
                        ▣
                    </div>

                    <div>
                        <span>Total Parts</span>
                        <strong>1,248</strong>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon green">
                        ✓
                    </div>

                    <div>
                        <span>Available</span>
                        <strong>892</strong>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon yellow">
                        !
                    </div>

                    <div>
                        <span>Low Stock</span>
                        <strong>205</strong>
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon red">
                        ×
                    </div>

                    <div>
                        <span>Out of Stock</span>
                        <strong>151</strong>
                    </div>

                </div>

            </div>


            

            <div class="dashboard-grid">

            

                <div class="card stock-card">

                    <h2>Stock Overview</h2>

                    <div class="chart">

                        <div class="chart-lines">
                            <span>800</span>
                            <span>600</span>
                            <span>400</span>
                            <span>200</span>
                            <span>0</span>
                        </div>

                        <div class="bars">

                            <div class="bar-item">
                                <div class="bar" style="height: 190px;"></div>
                                <span>Engine</span>
                            </div>

                            <div class="bar-item">
                                <div class="bar" style="height: 105px;"></div>
                                <span>Brake</span>
                            </div>

                            <div class="bar-item">
                                <div class="bar" style="height: 130px;"></div>
                                <span>Electrical</span>
                            </div>

                            <div class="bar-item">
                                <div class="bar" style="height: 55px;"></div>
                                <span>Suspension</span>
                            </div>

                            <div class="bar-item">
                                <div class="bar" style="height: 75px;"></div>
                                <span>Others</span>
                            </div>

                        </div>

                    </div>

                </div>


                

                <div class="card activities-card">

                    <h2>Recent Activities</h2>

                    <div class="activity">

                        <div class="activity-icon blue">
                            ▣
                        </div>

                        <div class="activity-text">
                            <strong>New stock added</strong>
                            <span>Brake Pad (BP-123)</span>
                        </div>

                        <time>2 hours ago</time>

                    </div>


                    <div class="activity">

                        <div class="activity-icon green">
                            ▤
                        </div>

                        <div class="activity-text">
                            <strong>Part located</strong>
                            <span>Oil Filter (OF-456)</span>
                        </div>

                        <time>3 hours ago</time>

                    </div>


                    <div class="activity">

                        <div class="activity-icon yellow">
                            ▣
                        </div>

                        <div class="activity-text">
                            <strong>Stock updated</strong>
                            <span>Air Filter (AF-789)</span>
                        </div>

                        <time>5 hours ago</time>

                    </div>


                    <div class="activity">

                        <div class="activity-icon blue">
                            ●
                        </div>

                        <div class="activity-text">
                            <strong>User login</strong>
                            <span>juan.delacruz@highluxx.com</span>
                        </div>

                        <time>6 hours ago</time>

                    </div>

                </div>

            </div>

        </section>

    </main>
    
</div>
<script>

function toggleNotifications(event) {

    event.stopPropagation();

    const notification =
        document.getElementById('notificationDropdown');

    const profile =
        document.getElementById('profileMenu');

    // Close profile
    profile.classList.remove('show');

    // Open/close notification
    notification.classList.toggle('show');
}


function toggleProfile(event) {

    event.stopPropagation();

    const profile =
        document.getElementById('profileMenu');

    const notification =
        document.getElementById('notificationDropdown');

    // Close notification
    notification.classList.remove('show');

    // Open/close profile
    profile.classList.toggle('show');
}


// CLICK OUTSIDE
document.addEventListener('click', function(event) {

    const notification =
        document.getElementById('notificationDropdown');

    const profile =
        document.getElementById('profileMenu');

    const notificationWrapper =
        document.querySelector('.notification-wrapper');

    const profileButton =
        document.querySelector('.profile-button');

    // Close notification if clicked outside
    if (
        notificationWrapper &&
        !notificationWrapper.contains(event.target)
    ) {
        notification.classList.remove('show');
    }

    // Close profile if clicked outside
    if (
        profileButton &&
        !profileButton.contains(event.target) &&
        !profile.contains(event.target)
    ) {
        profile.classList.remove('show');
    }

});

</script>

</body>
</html>