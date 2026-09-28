<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Parts Locator - HIGHLUXX</title>

    @vite('resources/css/parts-locator.css')
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
                <h1>Parts Locator</h1>
                <p>Search for a part and find its storage location.</p>
            </div>



            <div class="search-area">

                <div class="search-box">

                    <span class="search-icon">⌕</span>

                    <input
                        type="text"
                        placeholder="Search by part name or part number..."
                    >

                </div>

                <button class="search-button">
                    ⌕ &nbsp; Search
                </button>

            </div>



            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>Part Name</th>
                            <th>Part Number</th>
                            <th>Location</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Brake Pad</td>
                            <td>B-123</td>
                            <td>A1-03</td>
                            <td>Brake System</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Oil Filter</td>
                            <td>OF-456</td>
                            <td>B2-07</td>
                            <td>Engine</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Air Filter</td>
                            <td>AF-789</td>
                            <td>C1-02</td>
                            <td>Engine</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Spark Plug</td>
                            <td>SP-101</td>
                            <td>B3-05</td>
                            <td>Electrical</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Shock Absorber</td>
                            <td>SA-202</td>
                            <td>A2-06</td>
                            <td>Suspension</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                    </tbody>

                </table>



                <div class="pagination">

                    <button>‹</button>
                    <button class="current">1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>5</button>
                    <button>›</button>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>