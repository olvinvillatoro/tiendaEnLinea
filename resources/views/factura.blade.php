@extends('layouts.app', ['pageSlug' => 'navegar'])

@section('content')

<section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                          <form action="#" class="billing-form">
                              <h3 class="mb-4 billing-heading">Billing Details</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                      <div class="form-group">
                          <label for="firstname">Firt Name</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="w-100"></div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="country">State / Country</label>
                              <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">France</option>
                              <option value="">Italy</option>
                              <option value="">Philippines</option>
                              <option value="">South Korea</option>
                              <option value="">Hongkong</option>
                              <option value="">Japan</option>
                            </select>
                          </div>
                          </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="streetaddress">Street Address</label>
                        <input type="text" class="form-control" placeholder="House number and street name">
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                        <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                      </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="towncity">Town / City</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="postcodezip">Postcode / ZIP *</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="emailaddress">Email Address</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-12">
                      <div class="form-group mt-4">
                                          <div class="radio">
                                            <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                                            <label><input type="radio" name="optradio"> Ship to different address</label>
                                          </div>
                                      </div>
                  </div>
                  </div>
                </form><!-- END -->
                      </div>
                      <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail bg-dark cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                      <span>Subtotal</span>
                                      <span>{{Cart::subtotal()}}</span>
                                  </p>
                                  
                                  <p class="d-flex">
                                      <span>Impuesto</span>
                                      <span>{{Cart::tax()}}</span>
                                  </p>
                                  <hr>
                                  <p class="d-flex total-price">
                                      <span>Total</span>
                                      <span>{{Cart::total()}}</span>
                                  </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail bg-secondary p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="checkbox">
                                                 <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- Efectuar Pago-->
                                      <p class="">

                                        <form action="{{route('factura.pagar')}}" method="post">
                                          @csrf
{{--                                        <input type="hidden" name="id" value="{ {Cart::}}">
--}}                                        <input type="hidden" name="nombre" value="{{Cart::content()}}">
                                        
                                        <button  type="submit" ><span class="btn btn-primary py-3 px-4"> Efectuar Pago</button>
                                      
                                      </form>
                                    </p>

                                      
                                      <!-- <p><a href="#"class="btn btn-primary py-3 px-4"></a></p> /Efectuar Pago-->

                                  </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
          </div>
        </div>
      </section> <!-- .section -->


@endsection


