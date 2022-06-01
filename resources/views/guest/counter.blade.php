@extends('layouts.main')
@section('counter')
<!--
          Start Counter Section
          ==================================== -->
          
          <section  class="counter-wrapper section-sm" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title">
                            <h2>Award-Winning Agency</h2>
                            <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
                        </div>
                    </div>
                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
                        <div class="counters-item">
                            <i class="tf-ion-ios-alarm-outline"></i>
                            <div>
                                <span class="counter" data-count="150">0</span>
                            </div>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                    <!-- end first count item -->
                
                    <!-- second count item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
                        <div class="counters-item">
                            <i class="tf-ion-ios-analytics-outline"></i>
                            <div>
                                <span class="counter" data-count="130">0</span>
                            </div>
                            <h3>Projects completed</h3>
                        </div>
                    </div>
                    <!-- end second count item -->
                
                    <!-- third count item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
                        <div class="counters-item">
                            <i class="tf-ion-ios-compose-outline"></i>
                            <div>
                                <span class="counter" data-count="99">0</span>
                            </div>
                            <h3>Positive feedback</h3>
                            
                        </div>
                    </div>
                    <!-- end third count item -->
                    
                    <!-- fourth count item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                        <div class="counters-item kill-border">
                            <i class="tf-ion-ios-bolt-outline"></i>
                            <div>
                                <span class="counter" data-count="250">0</span>
                            </div>
                            <h3>Cups of Coffee</h3>
                        </div>
                    </div>
                    <!-- end fourth count item -->
                </div> 		<!-- end row -->
            </div>   	<!-- end container -->
        </section>   <!-- end section -->
@endsection