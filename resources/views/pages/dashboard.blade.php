@include('admin.dashboardHeader')
    <body>
    @include('admin.dashboardNav')
    @include('admin.dashboardSidNav')

            @yield('content');
            <!-- Show activity start here -->
            <div id="layoutSidenav_content">
                <main>
                </main>
                @include('admin.dashboadFooter')
           
