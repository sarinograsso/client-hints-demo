<hr>

<?php echo headers_data(); ?>

<div class="container card mb-3">
    <div class="card-body">
        <h5 class="card-title">TTFB & CWV</h5>
        <table class="table table-hover table-sm">
            <thead>
            <tr>
                <th scope="col" class="w-25">Metric</th>
                <th scope="col">Value (ms)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>TTFB</td>
                <td id="ttfb-placeholder"></td>
            </tr>
            <tr>
                <td>LCP</td>
                <td id="lcp-placeholder"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--SCRIPT TO MEASURE TTFB & PAGE PERFORMANCE METRICS-->
<script>
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // TTFB
    new PerformanceObserver((entryList) => {
        const [pageNav] = entryList.getEntriesByType('navigation');
        const ttfb = pageNav.responseStart;
        console.log(`TTFB: ${ttfb}`);
        document.getElementById("ttfb-placeholder").innerText = ttfb;
    }).observe({
        type: 'navigation',
        buffered: true
    });

    // LCP
    new PerformanceObserver((entryList) => {
        for (const entry of entryList.getEntries()) {
            const lcp = entry.startTime;
            console.log('LCP:', lcp);
            document.getElementById("lcp-placeholder").innerText = lcp;
        }
    }).observe({type: 'largest-contentful-paint', buffered: true});

</script>

</body>
</html>
