@extends('userMaster')

@section('title', 'Home Page')

@section('content')

    <div class="dashboard-container">
        <div class="payouts-card">
            <!-- Page Title -->
            <h1 class="page-title">Payouts</h1>

            <!-- Info Cards Row -->
            <div class="info-cards-row">
                <!-- Payout Terms Card -->
                <div class="info-card">
                    <h3 class="info-card-title">Payout terms</h3>
                    <h4 class="info-card-subtitle">Monthly / Net-30</h4>
                    <p class="info-card-text">This month's commissions will be paid next month on 30th if the payout amount is over $50.</p>
                </div>

                <!-- Selected Payout Method Card -->
                <div class="info-card">
                    <h3 class="info-card-title">Selected payout method</h3>
                    <button class="set-method-btn">
                        <i class="fas fa-plus"></i>
                        Set Payout Method
                    </button>
                    <p class="no-method-text">No Payout method set</p>
                </div>
            </div>

            <!-- Warning Section -->
            <div class="warning-section">
                <div class="warning-header">
                    <i class="fas fa-triangle-exclamation warning-icon"></i>
                    <h3 class="warning-title">Payouts issues</h3>
                </div>
                <p class="warning-text">Payment cannot be made because:</p>
                <ul class="warning-list">
                    <li>Promoter has no selected payout method</li>
                    <li>Payment amount is below the threshold of $50</li>
                </ul>
            </div>

            <!-- Table -->
            <div class="table-container">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Period</th>
                            <th>Paid at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td><span class="amount-text">$ 2.1</span></td>
                            <td>September 2025</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 125.50</span></td>
                            <td>August 2025</td>
                            <td>30 Sep 2025</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 89.25</span></td>
                            <td>July 2025</td>
                            <td>30 Aug 2025</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 156.75</span></td>
                            <td>June 2025</td>
                            <td>30 Jul 2025</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge failed">Failed</span></td>
                            <td><span class="amount-text">$ 45.00</span></td>
                            <td>May 2025</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 203.80</span></td>
                            <td>April 2025</td>
                            <td>30 May 2025</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 98.40</span></td>
                            <td>March 2025</td>
                            <td>30 Apr 2025</td>
                        </tr>
                        <tr>
                            <td><span class="status-badge paid">Paid</span></td>
                            <td><span class="amount-text">$ 167.90</span></td>
                            <td>February 2025</td>
                            <td>30 Mar 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set Payout Method button functionality
        document.querySelector('.set-method-btn').addEventListener('click', function() {
            alert('Set Payout Method modal would open here');
        });
    </script>


@endsection