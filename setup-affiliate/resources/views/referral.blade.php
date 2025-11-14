@extends('userMaster')

@section('title', 'Home Page')

@section('content')

    <div class="dashboard-container">
        <div class="referrals-card">
            <!-- Header -->
            <div class="card-header-custom">
                <h2 class="card-title">Referrals</h2>
                <button class="download-btn">
                    <i class="fas fa-download"></i>
                </button>
            </div>

            <!-- Search and Filter Bar -->
            <div class="search-filter-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Start your search..." id="searchInput">
                </div>
                <div class="filter-group">
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i>
                    </button>
                    <select class="state-dropdown">
                        <option>State: Any</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="table-container">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>State</th>
                            <th>Email</th>
                            <th>Customer since</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>skumar869993@gmail.com</td>
                            <td>
                                <span class="date-text">18 Sep 2025</span>
                                <span class="time-text">08:49 AM</span>
                            </td>
                            <td>
                                <span class="date-text">18 Sep 2025</span>
                                <span class="time-text">08:49 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>rodep84372@reifide.com</td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">11:07 AM</span>
                            </td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">11:07 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>wokohet739@ishense.com</td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">10:58 AM</span>
                            </td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">10:58 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>xosanid578@obirah.com</td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">10:32 AM</span>
                            </td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">10:32 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td>pasay92781@obirah.com</td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">06:47 AM</span>
                            </td>
                            <td>
                                <span class="date-text">17 Sep 2025</span>
                                <span class="time-text">06:47 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>foreco5298@ishense.com</td>
                            <td>
                                <span class="date-text">16 Sep 2025</span>
                                <span class="time-text">11:38 AM</span>
                            </td>
                            <td>
                                <span class="date-text">16 Sep 2025</span>
                                <span class="time-text">11:38 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>nodeteb543@merumart.com</td>
                            <td>
                                <span class="date-text">16 Sep 2025</span>
                                <span class="time-text">11:01 AM</span>
                            </td>
                            <td>
                                <span class="date-text">16 Sep 2025</span>
                                <span class="time-text">11:01 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge inactive">Inactive</span></td>
                            <td>james.wilson@example.com</td>
                            <td>
                                <span class="date-text">15 Sep 2025</span>
                                <span class="time-text">03:22 PM</span>
                            </td>
                            <td>
                                <span class="date-text">15 Sep 2025</span>
                                <span class="time-text">03:22 PM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge">Active</span></td>
                            <td>sarah.johnson@example.com</td>
                            <td>
                                <span class="date-text">14 Sep 2025</span>
                                <span class="time-text">09:15 AM</span>
                            </td>
                            <td>
                                <span class="date-text">14 Sep 2025</span>
                                <span class="time-text">09:15 AM</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td>michael.brown@example.com</td>
                            <td>
                                <span class="date-text">13 Sep 2025</span>
                                <span class="time-text">02:45 PM</span>
                            </td>
                            <td>
                                <span class="date-text">13 Sep 2025</span>
                                <span class="time-text">02:45 PM</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');
            
            rows.forEach(row => {
                const email = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                if (email.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter by state
        document.querySelector('.state-dropdown').addEventListener('change', function(e) {
            const selectedState = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');
            
            rows.forEach(row => {
                const status = row.querySelector('.status-badge').textContent.toLowerCase();
                if (selectedState === 'state: any' || status === selectedState) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

@endsection