<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabhas Solar – Industrial ROI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0d1117;
            font-family: 'DM Sans', sans-serif;
            color: #e8e8e8;
            overflow-x: hidden;
        }

        /* ── SECTION WRAPPER ── */
        .solar-section {
            position: relative;
            padding: 80px 0 100px;
            overflow: hidden;
        }

        /* diagonal amber stripe */
        .solar-section::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -200px;
            width: 700px;
            height: 700px;
            background: radial-gradient(ellipse at center, rgba(243,156,18,0.18) 0%, transparent 70%);
            pointer-events: none;
        }

        /* ── HEADER BLOCK ── */
        .section-eyebrow {
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
            font-size: 0.78rem;
            letter-spacing: 0.35em;
            text-transform: uppercase;
            color: #f39c12;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
        }
        .section-eyebrow::before {
            content: '';
            display: inline-block;
            width: 30px;
            height: 2px;
            background: #f39c12;
        }

        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.8rem, 6vw, 5rem);
            line-height: 1;
            letter-spacing: 0.04em;
            color: #ffffff;
        }
        .section-title span {
            color: #f39c12;
        }

        .section-subtitle {
            font-size: 1rem;
            color: #8a95a3;
            font-weight: 300;
            max-width: 500px;
        }

        /* ── STAT STRIP ── */
        .stat-strip {
            background: linear-gradient(135deg, #1a2332 0%, #1e2d42 100%);
            border: 1px solid rgba(243,156,18,0.2);
            border-radius: 16px;
            padding: 32px 40px;
            margin: 50px 0;
        }
        .stat-item {
            text-align: center;
            position: relative;
        }
        .stat-item + .stat-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 50px;
            width: 1px;
            background: rgba(243,156,18,0.25);
        }
        .stat-number {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.6rem;
            color: #f39c12;
            line-height: 1;
        }
        .stat-label {
            font-size: 0.78rem;
            color: #8a95a3;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-top: 4px;
        }

        /* ── TABLE ── */
        .roi-table-wrap {
            background: #121920;
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 60px;
        }
        .roi-table-wrap .table {
            margin: 0;
            color: #d0d9e4;
        }
        .roi-table-wrap thead tr {
            background: #f39c12;
        }
        .roi-table-wrap thead th {
            color: #0d1117;
            font-weight: 600;
            font-size: 0.82rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 16px 20px;
            border: none;
        }
        .roi-table-wrap tbody tr {
            border-bottom: 1px solid rgba(255,255,255,0.05);
            transition: background 0.2s;
        }
        .roi-table-wrap tbody tr:last-child { border-bottom: none; }
        .roi-table-wrap tbody tr:hover {
            background: rgba(243,156,18,0.06);
        }
        .roi-table-wrap tbody td {
            padding: 16px 20px;
            font-size: 0.93rem;
            border: none;
            vertical-align: middle;
        }
        .roi-table-wrap .cap-label {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem;
            color: #ffffff;
            letter-spacing: 0.06em;
        }
        .badge-payback {
            background: rgba(39,174,96,0.15);
            color: #2ecc71;
            border: 1px solid rgba(46,204,113,0.35);
            font-size: 0.8rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 50px;
        }
        .table-note {
            padding: 14px 22px;
            background: rgba(243,156,18,0.06);
            border-top: 1px solid rgba(243,156,18,0.12);
            font-size: 0.78rem;
            color: #8a95a3;
        }

        /* ── BENEFIT CARDS ── */
        .benefits-heading {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
            letter-spacing: 0.04em;
            color: #ffffff;
            margin-bottom: 6px;
        }

        .benefit-card {
            background: #121920;
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 14px;
            padding: 30px 26px;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: border-color 0.3s, transform 0.3s;
        }
        .benefit-card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, #f39c12, #e67e22);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.35s ease;
        }
        .benefit-card:hover {
            border-color: rgba(243,156,18,0.35);
            transform: translateY(-6px);
        }
        .benefit-card:hover::after {
            transform: scaleX(1);
        }
        .benefit-icon {
            width: 48px;
            height: 48px;
            background: rgba(243,156,18,0.12);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f39c12;
            font-size: 1.25rem;
            margin-bottom: 18px;
        }
        .benefit-card h5 {
            font-weight: 600;
            font-size: 1rem;
            color: #ffffff;
            margin-bottom: 8px;
        }
        .benefit-card p {
            font-size: 0.87rem;
            color: #8a95a3;
            line-height: 1.65;
            margin: 0;
        }

        /* ── FOOTER NOTE ── */
        .section-footer-note {
            margin-top: 60px;
            padding: 24px 32px;
            background: linear-gradient(135deg, rgba(243,156,18,0.08), rgba(243,156,18,0.03));
            border: 1px solid rgba(243,156,18,0.18);
            border-radius: 12px;
            font-size: 0.88rem;
            color: #8a95a3;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .section-footer-note i {
            color: #f39c12;
            font-size: 1.3rem;
            flex-shrink: 0;
        }
    </style>
</head>
<body>

<section class="solar-section">
    <div class="container">

        <!-- ── HEADER ── -->
        <div class="row align-items-end mb-2">
            <div class="col-lg-7">
                <div class="section-eyebrow">Industrial Solar Investment</div>
                <h2 class="section-title">ROI <span>Analysis</span><br>& Returns</h2>
                <p class="section-subtitle mt-3">Smart capital allocation for sustainable industrial growth — backed by real numbers.</p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <p class="text-muted small mb-0">Based on average sunlight hours &<br>industrial tariffs in Andhra Pradesh</p>
            </div>
        </div>

        <!-- ── STAT STRIP ── -->
        <div class="stat-strip">
            <div class="row g-3 g-md-0">
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-number">25 Yrs</div>
                    <div class="stat-label">Asset Lifespan</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-number">90%</div>
                    <div class="stat-label">Cost Reduction</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-number">~3 Yrs</div>
                    <div class="stat-label">Avg. Payback</div>
                </div>
                <div class="col-6 col-md-3 stat-item">
                    <div class="stat-number">1.5%</div>
                    <div class="stat-label">Annual O&amp;M Cost</div>
                </div>
            </div>
        </div>

        <!-- ── ROI TABLE ── -->
        <div class="roi-table-wrap">
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-center">
                    <thead>
                        <tr>
                            <th class="text-start">Capacity</th>
                            <th>Avg. Cost (2025)</th>
                            <th>Annual Generation</th>
                            <th>Annual Savings</th>
                            <th>Payback Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start cap-label">80 kW</td>
                            <td>₹20 – 32 Lakh</td>
                            <td>70,500 Units</td>
                            <td>₹7 – 8 Lakh</td>
                            <td><span class="badge-payback">3 – 3.5 Yrs</span></td>
                        </tr>
                        <tr>
                            <td class="text-start cap-label">100 kW</td>
                            <td>₹40 – 43 Lakh</td>
                            <td>1.4 Lakh Units</td>
                            <td>₹12 – 14 Lakh</td>
                            <td><span class="badge-payback">3 Yrs</span></td>
                        </tr>
                        <tr>
                            <td class="text-start cap-label">200 kW</td>
                            <td>₹55 – 105 Lakh</td>
                            <td>3.5 Lakh Units</td>
                            <td>₹28 – 35 Lakh</td>
                            <td><span class="badge-payback">3 – 3.4 Yrs</span></td>
                        </tr>
                        <tr>
                            <td class="text-start cap-label">500 kW</td>
                            <td>₹1.8 – 2 Crore</td>
                            <td>7 Lakh Units</td>
                            <td>₹55 – 70 Lakh</td>
                            <td><span class="badge-payback">3 – 3.5 Yrs</span></td>
                        </tr>
                        <tr>
                            <td class="text-start cap-label">1 MW</td>
                            <td>₹3.5 – 4 Crore</td>
                            <td>14 Lakh Units</td>
                            <td>₹1 – 1.4 Crore</td>
                            <td><span class="badge-payback">3 – 3.3 Yrs</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-note">
                * Calculations based on average sunlight hours and current industrial electricity tariffs in Andhra Pradesh.
            </div>
        </div>

        <!-- ── BENEFITS ── -->
        <div class="row mb-4">
            <div class="col-12">
                <h3 class="benefits-heading">Long-Term <span style="color:#f39c12;">Financial</span> Benefits</h3>
                <p class="text-muted" style="font-size:0.9rem;">Maximize your returns well beyond the payback window</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <h5>80–90% Cost Reduction</h5>
                    <p>Drastically lower your monthly electricity expenses and directly improve your bottom line.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-shield-alt"></i></div>
                    <h5>Tariff Protection</h5>
                    <p>Shield your business from future electricity price hikes for the next 25 years.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-tools"></i></div>
                    <h5>Low O&amp;M Costs</h5>
                    <p>Minimal maintenance at 1–1.5% per year ensures high reliability with low operational effort.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-leaf"></i></div>
                    <h5>Enhanced ESG Rating</h5>
                    <p>Boost your corporate image and environmental score with measurable sustainable energy usage.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-battery-full"></i></div>
                    <h5>Energy Independence</h5>
                    <p>Gain full control over your energy production and reduce dependence on the local grid.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-hourglass-half"></i></div>
                    <h5>25-Year Asset Life</h5>
                    <p>Invest once and reap the benefits of clean, free energy for over two productive decades.</p>
                </div>
            </div>
        </div>

        <!-- ── FOOTER NOTE ── -->
        <div class="section-footer-note">
            <i class="fas fa-sun"></i>
            <span>Nabhas Solar specialises in end-to-end industrial solar installations across Andhra Pradesh &amp; Telangana. All ROI figures are indicative and vary based on site conditions, sanctioned load, and applicable state policies.</span>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>