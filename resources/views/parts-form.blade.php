<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add / Edit Part - HIGHLUXX</title>

    @vite('resources/css/parts-form.css')
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

        
            <a href="/parts-information" class="back">
                ← &nbsp; Back
            </a>

            <h1>Add / Edit Part</h1>


            
            <div class="form-card">

                <form action="#" method="POST">

                    @csrf

                    <div class="form-grid">

                    
                        <div class="form-column">

                            <div class="form-group">
                                <label>
                                    Part Name <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    name="part_name"
                                    placeholder="Enter part name"
                                >
                            </div>


                            <div class="form-group">
                                <label>
                                    Category <span>*</span>
                                </label>

                                <select name="category">
                                    <option value="">Select category</option>
                                    <option>Brake System</option>
                                    <option>Engine</option>
                                    <option>Electrical</option>
                                    <option>Suspension</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>
                                    Quantity <span>*</span>
                                </label>

                                <input
                                    type="number"
                                    name="quantity"
                                    placeholder="Enter quantity"
                                >
                            </div>


                            <div class="form-group">
                                <label>
                                    Location <span>*</span>
                                </label>

                                <select name="location">
                                    <option value="">Select location</option>
                                    <option>A1-03</option>
                                    <option>A2-06</option>
                                    <option>B2-07</option>
                                    <option>B3-05</option>
                                    <option>C1-02</option>
                                </select>
                            </div>

                        </div>


                        
                        <div class="form-column">

                            <div class="form-group">
                                <label>
                                    Part Number <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    name="part_number"
                                    placeholder="Enter part number"
                                >
                            </div>


                            <div class="form-group">
                                <label>
                                    Price <span>*</span>
                                </label>

                                <div class="price-input">

                                    <input
                                        type="number"
                                        name="price"
                                        placeholder="Enter price"
                                        step="0.01"
                                    >

                                    <span>₱</span>

                                </div>
                            </div>


                            <div class="form-group description-group">

                                <label>
                                    Description
                                </label>

                                <textarea
                                    name="description"
                                    placeholder="Enter additional details (optional)"
                                ></textarea>

                            </div>

                        </div>

                    </div>


                    
                    <div class="form-actions">

                        <a
                            href="/parts-information"
                            class="cancel-btn"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="save-btn"
                        >
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
</body>
</html>