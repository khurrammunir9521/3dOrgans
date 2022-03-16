    <div class="modal fade page result" id="publicFullSubmittedModal" tabindex="-1" aria-labelledby="publicFullSubmittedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="visibility: hidden;"></button>
                                <div>
                                    <span class="outline dot">أكثر من 13 عضو اصطناعي</span>
                                    <h1 class="modal-title right">الخدمات الطبية</h1>
                                </div>
                                <div class="profile">
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="submitted-data">
                                <h6>رقم الطلب</h6>
                                <h1>244</h1>
                                <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> رفع الطلب</p>
                                <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="red-circle"> الدفع</p>
                                <span>سيتم تحديث حالة الطلب من قبل الإدارة</span>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <img src="{{asset('user/assets/images/3dPrinter.png')}}" class="img-fluid mx-auto d-block" width="400" alt="3DPrinter">
                        </div>
                        <div class="col-md-12">
                            <div class="form-action">
                                <button class="btn btn-form mx-3 with-arrow" data-bs-toggle="modal" data-bs-target="#publicFullReadableModal">تفاصيل الطلب</button>
                                <p>تمت بنجاح المرحلة الأولى من الطلب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>