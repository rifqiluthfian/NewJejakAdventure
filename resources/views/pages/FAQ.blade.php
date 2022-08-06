@extends('layouts.app')
@section('title')
FaQ
@endsection
@section('content')
    <!-- detailheader -->
    <main class="details-header">
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-d-none p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item-berita active">
                                    FAQ
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center faq-body">
                    <div class="container-fluid">
                        <h2 class="text-center my-4">Frequently Asked Questions(FAQs)</h2>
                        <h3 class="font-weight-bold my-4">For Customer</h3>
                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>Whats is Jejak Adventure?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                Jejak Adventure, which is a web-based application that accommodates trusted travel agents to join the 
                                Adventure trail to market trips. So that customers will be facilitated to book trips online and safely
                            </p>
                        </div>

                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>How to order trip?</h5>
                        </div>

                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>How to cancel order trip?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                You can contact admin before 5 days earlier from departure date.
                            </p>
                        </div>

                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>Can i join to being travel agent in Jejak Adventure?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                Of course you can, the way is that you can contact the admin first, to register as a travel agent.
                            </p>
                        </div>

                        <h3 class="font-weight-bold my-4">For Travel Agent</h3>
                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>How i can publish my trip?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                 You can go to the travel package page then click "add travel". Then fill in your trip form according to the input.
                                Then to add photos to your travel package, you can add them in the travel gallery menu.
                            </p>
                        </div>

                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>How to check status transaction?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                You can open it in the transaction menu.
                            </p>
                        </div>

                        <div class="subask">
                            <div class="icon">
                            </div>
                            <h5>How i can get payment?</h5>
                        </div>
                        <div class="panel">
                            <p>
                                If you have contacted our user who has ordered, then please send proof if you have contacted
                                our user to admin. After the admin has confirmed your payment will be processed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
    </main>
        <!-- tutupdetailheader -->

   
@endsection