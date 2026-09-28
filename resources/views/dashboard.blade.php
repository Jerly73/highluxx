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

            <div class="profile">

                <span class="notification">♧</span>

                <div class="profile-circle">
                    JD
                </div>

                <div class="profile-info">
                    <strong>Juan Dela Cruz</strong>
                    <small>Branch Manager</small>
                </div>

                <span class="dropdown">⌄</span>

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

</body>
</html>