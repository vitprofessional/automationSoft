@extends('manager.include')
@section('adminTitle')
  Pirjatrapur Union Porishod
@endsection
@section('adminContent')              
                <div class="col-10 grid-margin stretch-card mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">আয়কর সদস্যের তালিকা</h4>
                            <p class="card-description"> আয়কর প্রদানকারী সকল সদস্যের তালিকা </p>
                            <div class="row border mx-2 pb-4">
                                <h3 class="bg-primary p-3 text-white">ব্যাক্তিগত তথ্য</h3>
                                <div class="col-12 mx-auto">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>হোল্ডিং নম্বর</th>
                                            <th>নাম</th>
                                            <th>পিতা/স্বামীর নাম</th>
                                            <th>জাতীয় পরিচয়পত্র</th>
                                            <th>হোল্ডিং প্লেট</th>
                                            <th>বিস্তারিত</th>
                                            <th>অপশন</th>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection