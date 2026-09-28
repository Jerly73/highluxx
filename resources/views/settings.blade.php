<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Settings - HIGHLUXX</title>

    @vite('resources/css/settings.css')
</head>

<body>

<div class="page">

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

            <div class="user-area">

                <span class="notification">♧</span>

                <div class="avatar">
                    JD
                </div>

                <div class="user-info">
                    <strong>Juan Dela Cruz</strong>
                    <small>Branch Manager</small>
                </div>

                <span class="arrow">⌄</span>

            </div>

        </header>


        <section class="content">

            <div class="heading">

                <div>
                    <h1>Settings</h1>
                    <p>Manage your account and system preferences.</p>
                </div>

            </div>


            <div class="settings-layout">

                <div class="settings-card">

                    <h2>Profile Information</h2>
                    <p class="description">
                        Update your account information.
                    </p>

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" value="Juan Dela Cruz">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" value="juan.delacruz@highluxx.com">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                            <input type="text" value="Branch Manager" disabled>
                        </div>

                        <div class="form-group">
                            <label>Branch</label>
                            <input type="text" value="HIGHLUXX Auto Care Center">
                        </div>

                    </div>

                    <button class="save-btn">
                        Save Changes
                    </button>

                </div>


                <div class="settings-card">

                    <h2>System Preferences</h2>
                    <p class="description">
                        Manage your system preferences.
                    </p>

                    <div class="setting-row">

                        <div>
                            <strong>Email Notifications</strong>
                            <p>Receive notifications about inventory updates.</p>
                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>

                    </div>

                    <div class="setting-row">

                        <div>
                            <strong>Low Stock Alerts</strong>
                            <p>Notify when parts reach low stock.</p>
                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>

                    </div>

                    <div class="setting-row">

                        <div>
                            <strong>Out of Stock Alerts</strong>
                            <p>Notify when a part becomes unavailable.</p>
                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>

                    </div>

                </div>


                <div class="settings-card">

                    <h2>Security</h2>
                    <p class="description">
                        Manage your account security.
                    </p>

                    <div class="security-row">

                        <div>
                            <strong>Password</strong>
                            <p>Last updated recently.</p>
                        </div>

                        <button class="outline-btn">
                            Change Password
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>