@extends('master')

@section('title', 'Home Page')

@section('content')

<div class="container-fluid py-5" style="background-color: #1a1d2e; min-height: 100vh;">
    <div class="container">
        
        <!-- Stats Cards Row -->
        <div class="row mb-4">
            <!-- Due in 17 Days Card -->
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-currency-dollar text-info fs-4 me-2"></i>
                            <small class="text-uppercase text-muted">Due in 17 Days</small>
                        </div>
                        <div class="d-flex align-items-baseline mb-2">
                            <span class="text-muted me-1">$</span>
                            <h2 class="mb-0 fw-bold">2.1</h2>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary text-white">Not Payable</span>
                            <span class="badge bg-warning text-dark d-flex align-items-center gap-1">
                                2 issues
                                <i class="bi bi-exclamation-circle"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Unpaid Card -->
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-clipboard-check text-info fs-4 me-2"></i>
                            <small class="text-uppercase text-muted">Total Unpaid</small>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-muted me-1">$</span>
                            <h2 class="mb-0 fw-bold">2.1</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Paid Card -->
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-wallet2 text-info fs-4 me-2"></i>
                            <small class="text-uppercase text-muted">Total Paid</small>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-muted me-1">$</span>
                            <h2 class="mb-0 fw-bold">0</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The One Percent Affiliates Card -->
        <div class="card bg-dark text-white border-0 mb-4">
            <div class="card-body p-4">
                <h3 class="card-title fw-bold mb-4">The One Percent Affiliates</h3>
                <div class="row text-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-cursor text-info fs-4"></i>
                            <div class="text-start">
                                <h2 class="mb-0 fw-bold">36</h2>
                                <small class="text-muted">clicks</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-people text-info fs-4"></i>
                            <div class="text-start">
                                <h2 class="mb-0 fw-bold">28</h2>
                                <small class="text-muted">referrals</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-person-check text-info fs-4"></i>
                            <div class="text-start">
                                <h2 class="mb-0 fw-bold">28</h2>
                                <small class="text-muted">customers</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Referral Links Card -->
        <div class="card bg-dark text-white border-0 mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title fw-bold mb-0">Referral links</h4>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-light btn-sm">
                            <i class="bi bi-pencil me-1"></i> Customize Token
                        </button>
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> New Link
                        </button>
                    </div>
                </div>
                
                <div class="input-group bg-secondary rounded p-3">
                    <i class="bi bi-link-45deg text-muted me-2 align-self-center"></i>
                    <input type="text" class="form-control bg-transparent border-0 text-white" 
                           value="https://trytheonepercent.com?fpr=jaspreet69" readonly>
                    <button class="btn btn-sm btn-dark ms-2" title="Copy">
                        <i class="bi bi-clipboard"></i>
                    </button>
                    <button class="btn btn-sm btn-dark ms-1" title="Share on Twitter">
                        <i class="bi bi-twitter"></i>
                    </button>
                    <button class="btn btn-sm btn-dark ms-1" title="Share on Facebook">
                        <i class="bi bi-facebook"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Frequently Asked Questions Card -->
        <div class="card bg-dark text-white border-0">
            <div class="card-body p-4">
                <h4 class="card-title fw-bold mb-3">Frequently Asked Questions</h4>
                <p class="text-muted mb-0">Not added.</p>
            </div>
        </div>

    </div>
</div>

<style>
    .card {
        transition: transform 0.2s;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
    
    .bg-dark {
        background-color: #2d3748 !important;
    }
    
    .text-info {
        color: #4299e1 !important;
    }
    
    .btn-info {
        background-color: #0ea5e9;
        border-color: #0ea5e9;
    }
    
    .btn-info:hover {
        background-color: #0284c7;
        border-color: #0284c7;
    }
</style>

@endsection