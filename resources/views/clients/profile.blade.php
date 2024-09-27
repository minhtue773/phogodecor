@extends('clients.layout.app')
@section('title')
@endsection
@section('content')
    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section container mb-80">
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">My Account</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    {{-- <div id="page-content" class="page-wrapper">
        <div class="login-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="my-account-content" id="accordion2">
                            <!-- My Personal Information -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">My Personal Information</a>
                                    </h4>
                                </div>
                                <div id="personal_info" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="new-customers">
                                                <div class="p-30">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="First Name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="last Name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">country</option>
                                                                <option value="c-1">Australia</option>
                                                                <option value="c-2">Bangladesh</option>
                                                                <option value="c-3">Unitd States</option>
                                                                <option value="c-4">Unitd Kingdom</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">State</option>
                                                                <option value="c-1">Melbourne</option>
                                                                <option value="c-2">Dhaka</option>
                                                                <option value="c-3">New York</option>
                                                                <option value="c-4">London</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">Town/City</option>
                                                                <option value="c-1">Victoria</option>
                                                                <option value="c-2">Chittagong</option>
                                                                <option value="c-3">Boston</option>
                                                                <option value="c-4">Cambridge</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="Phone here...">
                                                        </div>
                                                    </div>
                                                    <input type="text"  placeholder="Company neme here...">
                                                    <input type="text"  placeholder="Email address here...">
                                                    <input type="password"  placeholder="Password">
                                                    <input type="password"  placeholder="Confirm Password">
                                                    <textarea class="custom-textarea" placeholder="Additional information..."></textarea>
                                                    <div class="checkbox">
                                                        <label class="mr-10"> 
                                                            <small>
                                                                <input type="checkbox" name="signup">I wish to subscribe to the 69 Fashion newsletter.
                                                            </small>
                                                        </label>
                                                        <br>
                                                        <label> 
                                                            <small>
                                                                <input type="checkbox" name="signup">I have read and agree to the <a href="#">Privacy Policy</a>
                                                            </small>
                                                        </label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- My shipping address -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#my_shipping">My shipping address</a>
                                    </h4>
                                </div>
                                <div id="my_shipping" class="panel-collapse collapse" role="tabpanel" >
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="new-customers p-30">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text"  placeholder="First Name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  placeholder="last Name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select">
                                                            <option value="defalt">country</option>
                                                            <option value="c-1">Australia</option>
                                                            <option value="c-2">Bangladesh</option>
                                                            <option value="c-3">Unitd States</option>
                                                            <option value="c-4">Unitd Kingdom</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select">
                                                            <option value="defalt">State</option>
                                                            <option value="c-1">Melbourne</option>
                                                            <option value="c-2">Dhaka</option>
                                                            <option value="c-3">New York</option>
                                                            <option value="c-4">London</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select">
                                                            <option value="defalt">Town/City</option>
                                                            <option value="c-1">Victoria</option>
                                                            <option value="c-2">Chittagong</option>
                                                            <option value="c-3">Boston</option>
                                                            <option value="c-4">Cambridge</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  placeholder="Phone here...">
                                                    </div>
                                                </div>
                                                <input type="text"  placeholder="Company neme here...">
                                                <input type="text"  placeholder="Email address here...">
                                                <textarea class="custom-textarea" placeholder="Additional information..."></textarea>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- My Order info -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#My_order_info">My Order info</a>
                                    </h4>
                                </div>
                                <div id="My_order_info" class="panel-collapse collapse" role="tabpanel" >
                                    <div class="panel-body">
                                        <form action="#">
                                            <!-- our order -->
                                            <div class="payment-details p-30">
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Dummy Product Name x 2</td>
                                                        <td class="td-title-2">$1855.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Dummy Product Name</td>
                                                        <td class="td-title-2">$555.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Cart Subtotal</td>
                                                        <td class="td-title-2">$2410.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Shipping and Handing</td>
                                                        <td class="td-title-2">$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Vat</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Order Total</td>
                                                        <td class="order-total-price">$2425.00</td>
                                                    </tr>
                                                </table>
                                                <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Payment Method -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#My_payment_method">Payment Method</a>
                                    </h4>
                                </div>
                                <div id="My_payment_method" class="panel-collapse collapse" role="tabpanel" >
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="new-customers p-30">
                                                <select class="custom-select">
                                                    <option value="defalt">Card Type</option>
                                                    <option value="c-1">Master Card</option>
                                                    <option value="c-2">Paypal</option>
                                                    <option value="c-3">Paypal</option>
                                                    <option value="c-4">Paypal</option>
                                                </select>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text"  placeholder="Card Number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  placeholder="Card Security Code">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select">
                                                            <option value="defalt">Month</option>
                                                            <option value="c-1">January</option>
                                                            <option value="c-2">February</option>
                                                            <option value="c-3">March</option>
                                                            <option value="c-4">April</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select">
                                                            <option value="defalt">Year</option>
                                                            <option value="c-4">2017</option>
                                                            <option value="c-1">2016</option>
                                                            <option value="c-2">2015</option>
                                                            <option value="c-3">2014</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">pay now</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">cancel order</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="submit-btn-1 mt-20 f-right btn-hover-1" type="submit" value="register">continue</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End page content -->
    <div id="page-content" class="page-wrapper">
        <div class="login-section mb-80">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-8">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        My Personal Information
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="new-customers">
                                                <div class="p-30">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="First Name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="last Name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">country</option>
                                                                <option value="c-1">Australia</option>
                                                                <option value="c-2">Bangladesh</option>
                                                                <option value="c-3">Unitd States</option>
                                                                <option value="c-4">Unitd Kingdom</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">State</option>
                                                                <option value="c-1">Melbourne</option>
                                                                <option value="c-2">Dhaka</option>
                                                                <option value="c-3">New York</option>
                                                                <option value="c-4">London</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="custom-select">
                                                                <option value="defalt">Town/City</option>
                                                                <option value="c-1">Victoria</option>
                                                                <option value="c-2">Chittagong</option>
                                                                <option value="c-3">Boston</option>
                                                                <option value="c-4">Cambridge</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text"  placeholder="Phone here...">
                                                        </div>
                                                    </div>
                                                    <input type="text"  placeholder="Company neme here...">
                                                    <input type="text"  placeholder="Email address here...">
                                                    <input type="password"  placeholder="Password">
                                                    <input type="password"  placeholder="Confirm Password">
                                                    <textarea class="custom-textarea" placeholder="Additional information..."></textarea>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        My Order info
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                        filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed fs-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Payment Method
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                        happening here in terms of content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
