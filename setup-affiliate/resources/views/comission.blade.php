@extends('userMaster')

@section('title', 'Home Page')

@section('content')

    <div class="dashboard-container">
        <div class="commissions-card">
            <!-- Header -->
            <div class="card-header-custom">
                <h2 class="card-title">Commissions</h2>
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
                    <select class="state-dropdown" id="stateFilter">
                        <option value="any">State: Any</option>
                        <option value="approved">Approved</option>
                        <option value="pending">Pending</option>
                        <option value="denied">Denied</option>
                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="table-container">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Customer</th>
                            <th>Created at</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.45</span></td>
                            <td>rodep84372@reifide.com</td>
                            <td><span class="date-text">17 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.1</span></td>
                            <td>xosanid578@obirah.com</td>
                            <td><span class="date-text">17 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.45</span></td>
                            <td>laxemib530@reifide.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.45</span></td>
                            <td>laxemib530@reifide.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.1</span></td>
                            <td>foreco5298@ishense.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.45</span></td>
                            <td>foreco5298@ishense.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.1</span></td>
                            <td>nodeteb543@merumart.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge denied">Denied</span></td>
                            <td><span class="amount-text">$ 0.45</span></td>
                            <td>nodeteb543@merumart.com</td>
                            <td><span class="date-text">16 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 0.25</span></td>
                            <td>sarah.johnson@example.com</td>
                            <td><span class="date-text">15 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td><span class="amount-text">$ 0.75</span></td>
                            <td>michael.brown@example.com</td>
                            <td><span class="date-text">15 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge approved">Approved</span></td>
                            <td><span class="amount-text">$ 1.20</span></td>
                            <td>emily.davis@example.com</td>
                            <td><span class="date-text">14 Sep 2025</span></td>
                        </tr>
                        <tr>
                            <td><span class="status-badge denied">Denied</span></td>
                            <td><span class="amount-text">$ 0.30</span></td>
                            <td>robert.wilson@example.com</td>
                            <td><span class="date-text">14 Sep 2025</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');
            
            rows.forEach(row => {
                const customer = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const amount = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                
                if (customer.includes(searchTerm) || amount.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter by status
        document.getElementById('stateFilter').addEventListener('change', function(e) {
            const selectedState = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');
            
            rows.forEach(row => {
                const status = row.querySelector('.status-badge').textContent.toLowerCase();
                
                if (selectedState === 'any' || status === selectedState) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>


@endsection