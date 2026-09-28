<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Parts Information - HIGHLUXX</title>

    @vite('resources/css/parts-information.css')
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
                    <h1>Parts Information</h1>
                    <p>Manage and view all automotive parts.</p>
                </div>

                <a href="{{ url('/parts-form') }}" class="add-btn">
                    + &nbsp; Add Part
                </a>

            </div>



            <div class="filters">

                <div class="search-box">

                    <span class="search-icon">⌕</span>

                    <input
                        type="text"
                        placeholder="Search by part name or part number..."
                    >

                </div>

                <select>
                    <option>All Categories</option>
                    <option>Brake System</option>
                    <option>Engine</option>
                    <option>Electrical</option>
                    <option>Suspension</option>
                </select>

                <select>
                    <option>All Status</option>
                    <option>Available</option>
                    <option>Low Stock</option>
                    <option>Out of Stock</option>
                </select>

            </div>



            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Part Name</th>
                            <th>Part Number</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>


                        <tr>

                            <td>Brake Pad</td>
                            <td>B-123</td>
                            <td>Brake System</td>
                            <td>15</td>
                            <td>₱ 1,200.00</td>
                            <td>A1-03</td>

                            <td>
                                <span class="status available">
                                    <span class="status-dot"></span>
                                    Available
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ url('/parts-form') }}" class="edit-btn">
                                    Edit
                                </a>
                                <button class="delete-btn">Delete</button>
                            </td>

                        </tr>



                        <tr>

                            <td>Oil Filter</td>
                            <td>OF-456</td>
                            <td>Engine</td>
                            <td>2</td>
                            <td>₱ 450.00</td>
                            <td>B2-07</td>

                            <td>
                                <span class="status low-stock">
                                    <span class="status-dot"></span>
                                    Low Stock
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ url('/parts-form') }}" class="edit-btn">
                                    Edit
                                </a>
                                <button class="delete-btn">Delete</button>
                            </td>

                        </tr>



                        <tr>

                            <td>Air Filter</td>
                            <td>AF-789</td>
                            <td>Engine</td>
                            <td>0</td>
                            <td>₱ 380.00</td>
                            <td>C1-02</td>

                            <td>
                                <span class="status out-stock">
                                    <span class="status-dot"></span>
                                    Out of Stock
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ url('/parts-form') }}" class="edit-btn">
                                    Edit
                                </a>
                                <button class="delete-btn">Delete</button>
                            </td>

                        </tr>



                        <tr>

                            <td>Spark Plug</td>
                            <td>SP-101</td>
                            <td>Electrical</td>
                            <td>8</td>
                            <td>₱ 250.00</td>
                            <td>B3-05</td>

                            <td>
                                <span class="status available">
                                    <span class="status-dot"></span>
                                    Available
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ url('/parts-form') }}" class="edit-btn">
                                    Edit
                                </a>
                                <button class="delete-btn">Delete</button>
                            </td>

                        </tr>


                        
                        <tr>

                            <td>Shock Absorber</td>
                            <td>SA-202</td>
                            <td>Suspension</td>
                            <td>4</td>
                            <td>₱ 1,800.00</td>
                            <td>A2-06</td>

                            <td>
                                <span class="status low-stock">
                                    <span class="status-dot"></span>
                                    Low Stock
                                </span>
                            </td>

                            <td class="actions">
                                <a href="{{ url('/parts-form') }}" class="edit-btn">
                                    Edit
                                </a>
                                <button class="delete-btn">Delete</button>
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