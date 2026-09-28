<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reports - HIGHLUXX</title>

    @vite('resources/css/reports.css')
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
                    <h1>Reports</h1>
                    <p>View and generate automotive parts reports.</p>
                </div>

                <button class="generate-btn">
                    + &nbsp; Generate Report
                </button>

            </div>

            <div class="report-cards">

                <div class="report-card">
                    <div class="card-icon">▤</div>
                    <div>
                        <h3>Total Parts</h3>
                        <strong>1,248</strong>
                        <p>All registered parts</p>
                    </div>
                </div>

                <div class="report-card">
                    <div class="card-icon">✓</div>
                    <div>
                        <h3>Available Parts</h3>
                        <strong>892</strong>
                        <p>Currently available</p>
                    </div>
                </div>

                <div class="report-card">
                    <div class="card-icon">!</div>
                    <div>
                        <h3>Low Stock</h3>
                        <strong>205</strong>
                        <p>Need monitoring</p>
                    </div>
                </div>

                <div class="report-card">
                    <div class="card-icon">×</div>
                    <div>
                        <h3>Out of Stock</h3>
                        <strong>151</strong>
                        <p>Currently unavailable</p>
                    </div>
                </div>

            </div>

            <div class="report-panel">

                <div class="panel-header">
                    <div>
                        <h2>Inventory Report</h2>
                        <p>Summary of automotive parts inventory.</p>
                    </div>

                    <div class="date-filter">
                        <select>
                            <option>This Month</option>
                            <option>This Week</option>
                            <option>Last Month</option>
                            <option>This Year</option>
                        </select>

                        <button class="export-btn">
                            Export
                        </button>
                    </div>
                </div>


                <table>
                    <thead>
                        <tr>
                            <th>Part Name</th>
                            <th>Part Number</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Location</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Brake Pad</td>
                            <td>B-123</td>
                            <td>Brake System</td>
                            <td>15</td>
                            <td>
                                <span class="status available">
                                    ● Available
                                </span>
                            </td>
                            <td>A1-03</td>
                        </tr>

                        <tr>
                            <td>Oil Filter</td>
                            <td>OF-456</td>
                            <td>Engine</td>
                            <td>2</td>
                            <td>
                                <span class="status low">
                                    ● Low Stock
                                </span>
                            </td>
                            <td>B2-07</td>
                        </tr>

                        <tr>
                            <td>Air Filter</td>
                            <td>AF-789</td>
                            <td>Engine</td>
                            <td>0</td>
                            <td>
                                <span class="status out">
                                    ● Out of Stock
                                </span>
                            </td>
                            <td>C1-02</td>
                        </tr>

                        <tr>
                            <td>Spark Plug</td>
                            <td>SP-101</td>
                            <td>Electrical</td>
                            <td>8</td>
                            <td>
                                <span class="status available">
                                    ● Available
                                </span>
                            </td>
                            <td>B3-05</td>
                        </tr>

                        <tr>
                            <td>Shock Absorber</td>
                            <td>SA-202</td>
                            <td>Suspension</td>
                            <td>4</td>
                            <td>
                                <span class="status low">
                                    ● Low Stock
                                </span>
                            </td>
                            <td>A2-06</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
</body>
</html>