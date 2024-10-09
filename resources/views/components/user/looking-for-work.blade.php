@props(['title' => 'Looking for Work?','paragraph' => '','buttonText' => 'Subscribe','path' => 'user/assets/ellipse/complete-bg.png'])
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div style="width: 100%;height: 353px;background-image: url({{asset($path)}});background-size: cover;background-repeat: no-repeat;">
                <div style="height: 100%;display: flex;justify-content: center;">
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;width: 44%;">
                        <h2 style="color: #ffff;font-weight: bold;font-size: 36px;">{{ $title }}</h2>
                        <p style="color: #ffff;font-weight: 400;font-size: 20px;padding-bottom: 25px;padding-top: 10px;">{{ $paragraph }}</p>
                        <div>
                            <a href="{{ url('subscription') }}" class="job-center-subscribe-btn">{{ $buttonText }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
