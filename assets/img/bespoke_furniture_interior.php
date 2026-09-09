<?php include("header.php"); ?>
<style>
  .besko .modal-body {
    border-radius: 20px !important;
    background: #f7f7f7;
    padding:0px 30px;
    border:none !important;
}
.custom-modal{
    border-radius:30px !important;
    border:none !important;
    box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.12),
        0 2px 8px rgba(0, 0, 0, 0.08) !important;
        
}
.besko.modal-title {
    font-weight: 600;
    letter-spacing: 1px;
}

/*.section-box {*/
/*    background: #ffffff;*/
/*    padding: 20px;*/
/*    border-radius: 12px;*/
/*    height: 100%;*/
/*    box-shadow: 0 4px 15px rgba(0,0,0,0.05);*/
/*}*/

.section-box h6 {
    font-weight: 700;
    color:#7b1e49;
    margin-bottom: 8px;
    position: relative;
}

.besko.section-box h6::before {
    content: "▸";
    color: #a94442;
    margin-right: 8px;
}

.section-box ul {
    list-style: none;
    padding-left: 0;
}

.section-box ul li {
    position: relative;
    padding-left: 18px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #555;
}

.section-box ul li::before {
    content: "▸";
    position: absolute;
    left: 0;
    color: #a94442;
    font-size: 18px;
}

</style>
<section class="testimonial-gallery py-5">
    <div class="container">
        <div class="row">
       <div class="col-lg-6 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b12.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                       View more
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b13.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        View more
                    </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b1.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        View more
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b2.webp" alt="testimonial">
                   <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        View More
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b3.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        View More
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b4.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        View More
                    </div>
                </div>
            </div>
            
             <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b5.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                       View More
                    </div>
                </div>
            </div>
            
             <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b6.webp" alt="testimonial">
                   <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                        View More
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b7.webp" alt="testimonial">
                   <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        View More
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b8.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        View More
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b14.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                       View More
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b15.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        View More
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b9.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        View More
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b10.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        View More
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <img src="./assets/img/furniture/b11.webp" alt="testimonial">
                    <div class="testimonial-caption" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Know More
                    </div>
                </div>
            </div>
            

            <!-- Add more cards same structure -->

        </div>
    </div>
</section>

<div class="modal besko fade" id="exampleModal2" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">CARVED SOFA SET</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Overview</h6>
              <ul>
                <li>The setup reflects a classic colonial or vintage European interior,
                characterized by intricate metal craftsmanship, warm tones, and timeless elegance.</li>

                <li>Seating Ensemble</li>

                <li style:"color:#000;"><b>1. Three-seater wooden sofa</b></li>

                <li>Material: Solid dark wood with hand-carved detailing on the backrest and arms.</li>

                <li>Upholstery: Mustard yellow fabric with delicate blue floral motifs.</li>

                <li>Style: Traditional Victorian or Edwardian influence.</li>
              </ul>
            </div>
          </div>

          <!-- Right Column -->
          <div class="col-md-6">
            <div class="section-box">
             
              <ul>
                <li style:"color:#000;"><b>2. Pair of armchairs</b></li>

                <li>Material and design match the main sofa.</li>

                <li>The same yellow floral upholstery ties the arrangement together.</li>

                <li>Armrests feature elegant scroll detailing.</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal3" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">WOODEN AND GLASS CABINET </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Overview</h6>
              <ul>
                <li>Material & Finish</li>

                <li>Primary Material: Solid wood (likely teak or sheesham)</li>

                <li>Finish: Medium walnut or honey brown polish with a natural wood grain texture</li>

                <li>Top Design: Crown moulding detail gives it a traditional,premium appeal</li>
             </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              <ul>
                <li>Form: Rectangular vertical cabinet</li>
                <li>Doors: Dual front-opening glass doors with wooden framing</li>
                <li>Panels: Lower section of each door has a decorative patterned wooden or fabric panel, adding ethnic flair</li>
                <li>Shelves: Multiple internal wooden shelves (likely 2–3 tiers) visible through glass for display/storage</li>
                <li>Base: Raised on four straight wooden legs, creating visual lightness and ease of floor cleaning</li>
                </ul>
              </div>
            </div>
           <div class="col-md-6">
            <div class="section-box">
              <h6>Functional Details</h6>
              <ul>
                <li>Usage: Suitable for use as a crockery unit, curio cabinet, or display shelf in dining/living rooms</li>
                <li>Storage Type: Combination of open visibility (glass) and partial concealment (decorative panel)</li>
                <li>Handles: Small, metallic pull handles with central alignment</li>
                <li>Ventilation & Visibility: Glass doors allow visibility of stored
objects, keeping them dust-free
</li>
                
                </ul>
              </div>
            </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal4" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">CARVED CABINET</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Hand-Carved Wooden Cabinet / Armoire / Storage Unit</li>

                <li>Material & Finish</li>

                <li>Primary Material: Solid hardwood — likely teak, mahogany,, known for strength and fine carving quality.</li>

                <li>Finish: Deep satin walnut brown and dark mahogany polish, emphasizing the natural wood grain.</li>
                <li>Surface Treatment: Hand-polished with a semi-gloss lacquer that preserves the carved detailing and wood tone.</li>
             </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              <ul>
                <li>Form: Freestanding rectangular cabinet with dual front doors.</li>
                <li>Doors:Two full wooden paneled doors</li>
                <li>Central vertical joint with brass or bronze pull handles</li>
                <li>Heavy, traditional design—no glass panels (fully enclosed storage).</li>
               
                </ul>
              </div>
            </div>
           <div class="col-md-6">
            <div class="section-box">
              <h6>Top Section:</h6>
              <ul>
                <li>Elaborate hand-carved floral and vine motifs forming a decorative frieze</li>
                <li>Raised cornice adds an antique royal touch.</li>
                
                
                </ul>
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="section-box">
              <h6>Side Columns:</h6>
              <ul>
                <li>Vertical pillars with sculpted floral caps and base scrolls.</li>
                <li>Carvings extend partially down the stiles, emphasizing craftsmanship.</li>
                
                
                </ul>
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
              <h6>Base:</h6>
              <ul>
                <li>Solid plinth with carved corner legs.</li>
                <li>Rounded and carved at the corners for a robust, ornamental profile.</li>
                
                
                </ul>
              </div>
            </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal5" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">GRANDFATHER CHAIR </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Recliner Lounge Chair / Planter’s Chai</li>

                <li>Material & Finish</li>

                <li>Primary Material: Solid wood — likely teak, oak, or sheesham, known for durability and natural finish.</li>

                <li>Finish: Warm matte honey brown or natural teak polish enhancing visible wood grains.</li>
                <li>Upholstery: Fabric seat and backrest in striped pattern, gradient tones of red and orange, giving it a vibrant, earthy aesthetic.</li>
                <li>Cushioning: Medium-firm foam padding for back and seat comfort.</li>
             </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              <ul>
                <li>Form: Reclined back with extended seat curve — ergonomically designed for relaxed lounging.</li>
                <li>Wide wooden armrests extending forward with a flat resting platform,</li>
                <li>traditionally used to rest arms or even small trays/books.</li>
               </ul>
              </div>
            </div>
           <div class="col-md-6">
            <div class="section-box">
              <h6>Frame:</h6>
              <ul>
                <li>Wooden legs and side supports designed in classic colonial style.</li>
                <li>Rear legs slightly angled backward to support reclined posture.</li>
            </ul>
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="section-box">
              <h6>Armrest Design:</h6>
              <ul>
                <li>Solid plank armrests with rounded edges at the front.</li>
                <li>Supported by vertical wooden dowels or turned spindles.</li>
                
                
                </ul>
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
              <h6>Backrest:</h6>
              <ul>
                <li>Slightly curved, attached with fabric stretched tautly over wooden frame for
both structure and comfort.</li>
               
                
                
                </ul>
              </div>
            </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal6" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">SMALL BLACK MARBLE TEA TABLE </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Round Pedestal Side Table / Bistro Table</li>

                <li>Material & Finish</li>

                <li>Tabletop Material: Polished black granite or marble top — glossy finish, dense and durable, with a subtle reflective surface.</li>

                <li>Tabletop Edge: Lightly beveled with a decorative wooden trim below, finished in natural yellowish-brown polish with hand-carved detailing.</li>
                <li>Base Material: Solid hardwood (likely teak or mango wood).</li>
                <li>Base Finish: Natural matte polish — warm honey or golden oak tone that contrasts the dark stone top.</li>
             </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Pedestal Base:</h6>
              <ul>
                <li>Single turned wooden column with a classical profile — tapering towards both ends.</li>
                <li>Supported by four splayed legs for stability.</li>
                <li>The leg ends are slightly curved and rounded, maintaining symmetry and strength.</li>
                <li>Joint Detailing: Top fixed to the wooden base through an integrated connecting plate (not visible externally).</li>
                </ul>
                <h6>Top:</h6>
              <ul>
                <li>Circular stone surface for durability and refined look.</li>
                <li>Size ideal for use as a café or accent table.</li>
            </ul>
              </div>
            </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              <ul>
                <li>Form: Compact, round pedestal table with balanced proportions.</li>
               
               </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal7" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">WOODEN DIVAN</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Classic Wooden Daybed / Chaise Lounge (Divan Style)</li>

                <li>Material & Finish</li>

                <li>Primary Structure: Solid teak wood or mahogany, chosen for durability and rich tone.</li>
                <li>Finish: Satin natural polish highlighting the wood’s natural grain, warm honey-brown or reddish teak hue.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Upholstery Fabric:</h6>
              <ul>
                <li>Floral-patterned woven upholstery fabric, muted tones of sage green with coral-red motifs.</li>
                <li>Likely cotton blend or linen-based, giving a soft, heritage appeal.</li>
               
                </ul>
                <h6>Cushioning:</h6>
              <ul>
                <li>High-density foam base with medium-firm support.</li>
                <li>Rolled armrests padded for comfort and finished with matching fabric.</li>
            </ul>
            
              </div>
            </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              
              <ul>
                <li>Form: Rectangular seat with low-height armrests on both sides.</li>
                <li>No backrest — open design typical of daybeds or divans.</li>
               </ul>
               
               <h6>Arms:</h6>
              
              <ul>
                <li>Gently curved wooden arms, scroll-shaped at ends.</li>
                <li>Upholstered rolls fixed between side arms for both aesthetics and comfort.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Legs:</h6>
              
              <ul>
                <li>Integrated into the frame with curved cabriole-style legs, adding an elegant classical stance.</li>
              </ul>
              
              <h6>Frame Detailing:</h6>
              
              <ul>
                <li>Smooth carved wooden edges with refined joinery.</li>
                <li>Polished to a uniform sheen — no visible nails or joints.</li>
              </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="modal besko fade" id="exampleModal8" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">ARMCHAIR</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Classic Victorian Accent Chair / Vintage Side Chair</li>

                <li>Material & Finish</li>

                <li>Primary Frame Material: Solid teak wood or mahogany, known for fine carving and durability.</li>
                <li>Wood Finish: Dark walnut or espresso polish, enhancing the ornate carved details and antique appeal.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Upholstery Fabric:</h6>
              <ul>
                <li>Backrest: Deep wine or maroon velvet with diamond-tufted button detailing.</li>
                <li>Seat: Beige or light gold woven upholstery fabric with subtle sheen for contrast.</li>
               
                </ul>
                <h6>Padding:</h6>
              <ul>
                <li>High-density foam in both seat and backrest for comfort.</li>
                <li>Upholstered using traditional methods with deep buttoning for plush texture.</li>
            </ul>
            
              </div>
            </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              
              <ul>
                <li>Form: Elegant armless chair with a high, curved backrest.</li>
                <li>Gently rounded seat with detailed wooden edging.</li>
               </ul>
               
               <h6>Backrest:</h6>
              
              <ul>
                <li>Victorian-style cresting on the top — hand-carved floral and scroll motifs.</li>
                <li>Button-tufted upholstery enhances the luxurious classical look.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Legs:</h6>
              
              <ul>
                <li>Four cabriole legs with delicate carvings at the knees and feet.</li>
                <li>Slightly splayed for balance and ornamentation.</li>
              </ul>
              
              <h6>Seat Base:</h6>
              
              <ul>
                <li>Circular padded seat with carved apron border aligning with the frame’s curvature.</li>
               
              </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal9" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">SOFA SET </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>A delicate seating set inspired by french design or intricate wood work at the back & queen Anne legs with neutral upholstery </li>
                <li>An eye catching combination of dark polished wood & pale fabric. Perfect setting for a tete- a tete with friends & family.</li>
                <li>Material & Finish</li>

                <li>Primary Frame Material: Solid teak wood or rosewood, known for its strength and carving potential.</li>
                <li>Finish: Dark walnut or espresso polish, semi-gloss finish highlighting the carved edges and classic curvature.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Upholstery Fabric:</h6>
              <ul>
                <li>Soft velvet or suede-textured fabric in taupe / light beige shade, offering a neutral and elegant tone.</li>
                <li>High-quality padding on both seat and backrest for plush comfort.</li>
               
                </ul>
                <h6>Cushioning:</h6>
              <ul>
                <li>Thick foam-filled seat and backrest.</li>
                <li>Comes with a loose lumbar cushion for additional support.</li>
                <li>Dual-layer cushioning with soft top layer ensures extra comfort and long-lasting shape retention.</li>
            </ul>
            
              </div>
            </div>
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              
              <ul>
                <li>Form: Compact two-seater with refined classical structure — ideal for living areas, foyers, or bedrooms.</li>
                <li>Balanced proportions and slightly reclined backrest ensure ergonomic comfort.</li>
               </ul>
               
               <h6>Backrest:</h6>
              
              <ul>
                <li>Rectangular with carved wooden frame detailing at the top.</li>
                <li>Upholstered central panel provides soft support.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Arms:</h6>
              
              <ul>
                <li>Gracefully curved open wooden arms with ornamental scroll ends and carved motifs on side joints.</li>
                <li>Adds traditional charm and visual lightness.</li>
              </ul>
              
              <h6>Legs:</h6>
              
              <ul>
                <li>Cabriole-style legs — outward curved front legs and slightly splayed rear legs for classical balance.</li>
               
              </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal10" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">ROOM DIVIDER </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Hand-Painted Wooden Partition Screen / Folding Room Divider</li>
               
                <li>Material & Finish</li>

                <li>Primary Material: Solid mango wood or teak wood, chosen for its sturdiness and ability to hold painted artwork.</li>
                <li>Finish: Base frame in warm terracotta brown polish, semi-matte finish.</li>
                <li>Intricate hand-painted artwork panels using traditional pigments and protective lacquer coat for durability.</li>
                <li>Painting Medium: Natural and acrylic colors sealed with a transparent varnish for sheen and protection.</li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Structure & Design</h6>
              
              <ul>
                <li>Form: Four-panel folding partition screen, hinged for flexible adjustment and portability.</li>
                <li>Each panel features two framed painted sections — upper and lower.</li>
               </ul>
               
               <h6>Panels:</h6>
              
              <ul>
                <li>Upper and lower portions depict Rajasthani miniature-style paintings — royal figures, court scenes, and garden motifs.</li>
                <li>The artwork is framed with carved wooden borders featuring floral and geometric motifs.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Top Profile:</h6>
              
              <ul>
                <li>Each panel has a scalloped (arched) top edge, adding a traditional Indian architectural touch.</li>
                
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Joinery:</h6>
              
              <ul>
                <li>Connected with metal hinges allowing folding in both directions.</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Back Side:</h6>
              
              <ul>
                <li>Plain polished wood finish, ensuring reversibility and stability.</li>
               
              </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal11" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">KASHMIRI CABINET </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Handcrafted Wooden Cabinet with Brass Inlay Work / Traditional Sideboard</li>
               
                <li>Material & Finish</li>

                <li>Primary Material: Solid Sheesham (Indian Rosewood) or Teak Wood, known for durability and rich grain.</li>
                <li>Finish: Medium walnut brown polish with semi-gloss texture enhancing the natural wood pattern.</li>
                <li>Highlighted with hand-carved floral motifs and brass inlay detailing, giving it a royal Indian aesthetic.</li>
                
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Inlay Material:</h6>
              
              <ul>
                <li>Fine brass wire and floral inlay work, embedded into carved recesses.</li>
                <li>Polished to maintain sheen and contrast against dark wood base.</li>
               </ul>
               
               <h6>Design & Structure</h6>
              
              <ul>
                <li>Form:Compact rectangular cabinet with one top drawer and two lower doors.</li>
                <li>Slightly curved front edge adds elegance and visual softness.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Top Section:</h6>
              
              <ul>
                <li>Smooth polished surface suitable for display items.</li>
                <li>Decorative brass inlay border runs along the top edge.</li>
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Drawer:</h6>
              
              <ul>
                <li>Single pull-out drawer with central round brass knob and carved floral detailing.</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Cabinet Doors:</h6>
              
              <ul>
                <li>Two front doors featuring intricate floral carving with brass inlay panels.</li>
                <li>Small brass knobs used for handles, harmonizing with the inlay design.</li>
              </ul>
               
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Base:</h6>
              
              <ul>
                <li>Slightly curved plinth base giving the piece stability and ornamental appeal.</li>
                <li>Side Panels:</li>
              </ul>
               
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal12" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">ARM CHAIR </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Traditional Wooden Barrel Chair / Curved Slatted Lounge Chair</li>
               
                <li>Material & Finish</li>

                <li>Primary Material: Solid teak wood or rosewood (sheesham) — chosen for its strength, rich tone, and carving flexibility.</li>
                <li>Finish: Polished walnut or honey teak finish with a semi-gloss texture that highlights the natural grain of the wood.</li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Cushion:</h6>
              
              <ul>
                <li>Loose back cushion in off-white fabric with blue floral embroidery, adding a touch of contrast and comfort.</li>
             </ul>
               
               <h6>Design & Structure</h6>
              
              <ul>
                <li>Form:Unique curved barrel-shaped structure with continuous slatted wooden elements forming the backrest, arms, and seat.</li>
                <li>Sculptural and ergonomic design, integrating traditional Indian craftsmanship with modern aesthetics.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Seat & Backrest:</h6>
              
              <ul>
                <li>Fully open slatted wooden structure allowing ventilation.</li>
                <li>Curved contour follows the natural posture of the body for relaxed seating.</li>
                <li>Solid wooden slats arranged horizontally and evenly spaced.</li>
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Armrests:</h6>
              
              <ul>
                <li>Integrated into the curved form, with smooth edges for comfortable resting</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Base:</h6>
              
              <ul>
                <li>Arched wooden stretcher connecting both sides for additional support and balance.</li>
                <li>Slatted design in the base complements the overall aesthetic and adds structural strength.</li>
                <li>Legs:</li>
              </ul>
               
              </div>
            </div>
            
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal13" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">DINING TABLE </h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>8-Seater Wooden Dining Table Set with Upholstered Chairs</li>
               
                <li>Material & Finish</li>

                <li>Primary Material: Solid teak wood or mahogany, known for strength, long life, and fine grain texture.</li>
                <li>Finish: Rich walnut or dark teak polish with semi-gloss lacquer for smooth texture and subtle sheen.</li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Tabletop Surface:</h6>
              
              <ul>
                <li>Glass top overlay — clear, beveled-edge tempered glass for durability and easy cleaning.</li>
                <li>Base frame and edges made of carved solid wood.</li>
             </ul>
               
               <h6>Upholstery:</h6>
              
              <ul>
                <li>Fabric: Floral-patterned fabric in beige and brown tones.</li>
                <li>Padding: Medium-density foam for comfortable seating.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Design & Structure</h6>
              
              <ul>
                <li>Dining Table</li>
                <li>Shape: Rectangular, suitable for 6 to 8 persons.</li>
               
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Top:</h6>
              
              <ul>
                <li>Wooden frame with inset clear glass surface.</li>
                <li>Polished beveled wooden border for a refined edge finish.</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Legs:</h6>
              
              <ul>
                <li>Four sturdy, slightly tapered wooden legs with carved detailing.</li>
                <li>Central stretcher or rail support may be included for added stability.</li>
             </ul>
               
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="section-box">
               <h6>Skirting:</h6>
              
              <ul>
                <li>Simple wooden apron under the tabletop maintaining visual lightness.</li>
              </ul>
               
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Dining Chairs</h6>
              
              <ul>
                <li>Frame: Solid wood matching the table’s polish.</li>
              </ul>
               
              </div>
              <div class="section-box">
               <h6>Seat:</h6>
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Backrest:</h6>
              
              <ul>
                <li>High back with carved lyre or harp-inspired design, featuring intricate cutwork detailing.</li>
                <li>Slightly curved for ergonomic comfort.</li>
              </ul>
               
              </div>
            </div>
           
            
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal14" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">ARM CHAIR</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>8-Seater Wooden Dining Table Set with Upholstered Chairs</li>
               
                <li>Material & Finish</li>

                <li>Primary Material: Solid teak wood or mahogany, known for strength, long life, and fine grain texture.</li>
                <li>Finish: Rich walnut or dark teak polish with semi-gloss lacquer for smooth texture and subtle sheen.</li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Tabletop Surface:</h6>
              
              <ul>
                <li>Glass top overlay — clear, beveled-edge tempered glass for durability and easy cleaning.</li>
                <li>Base frame and edges made of carved solid wood.</li>
             </ul>
               
               <h6>Upholstery:</h6>
              
              <ul>
                <li>Fabric: Floral-patterned fabric in beige and brown tones.</li>
                <li>Padding: Medium-density foam for comfortable seating.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Design & Structure</h6>
              
              <ul>
                <li>Dining Table</li>
                <li>Shape: Rectangular, suitable for 6 to 8 persons</li>
               
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Top:</h6>
              
              <ul>
                <li>Wooden frame with inset clear glass surface.</li>
                <li>Polished beveled wooden border for a refined edge finish.</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Legs:</h6>
              
              <ul>
                <li>Four sturdy, slightly tapered wooden legs with carved detailing.</li>
                <li>Central stretcher or rail support may be included for added stability.</li>
             </ul>
               
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="section-box">
               <h6>Skirting:</h6>
              
              <ul>
                <li>Simple wooden apron under the tabletop maintaining visual lightness.</li>
              </ul>
               
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Dining Chairs</h6>
              
              <ul>
                <li>Frame: Solid wood matching the table’s polish.</li>
              </ul>
               <div class="section-box">
               <h6>Seat:</h6>
              
              <ul>
                <li>Padded and upholstered in floral fabric for softness and contrast.</li>
               
              </ul>
               
              </div>
              </div>
              
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Backrest:</h6>
              
              <ul>
                <li>High back with carved lyre or harp-inspired design, featuring intricate cutwork detailing.</li>
                <li>Slightly curved for ergonomic comfort.</li>
              </ul>
               
              </div>
            </div>
          
             <div class="col-md-6">
            <div class="section-box">
               <h6>Legs:</h6>
              
              
               
              </div>
            </div>
            
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal besko fade" id="exampleModal15" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content custom-modal">

      <div class="modal-body p-4">
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>

        <h2 class="modal-title mb-4">ARM CHAIR</h2>

        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6">
            <div class="section-box">
              <h6>Furniture Type</h6>
              <ul>
                <li>Contemporary Wooden Lounge Chair / Cane-Back Accent Chair</li>
               
                <li>Material & Finish</li>

                <li>Primary Frame Material: Solid teak wood or oak, providing structural strength and a refined grain pattern.</li>
                <li>Finish: Natural matte teak or walnut polish, preserving the warm wood tone with a soft satin sheen.</li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="section-box">
              <h6>Backrest Material:</h6>
              
              <ul>
                <li>Handwoven natural cane/rattan weave, offering breathability and a traditional touch.</li>
               
             </ul>
               
               <h6>Upholstery Fabric:</h6>
              
              <ul>
                <li>Seat Cushion: Soft cotton-linen fabric in ivory or off-white shade.</li>
                <li>Accent Cushions: Decorative cushions in contrasting yellow polka-dot and floral prints, adding a pop of color and warmth.</li>
               </ul>
               </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
                <h6>Cushioning:</h6>
              
              <ul>
                <li>High-resilience foam with medium-firm comfort.</li>
              </ul>
              </div>
            </div>
              <div class="col-md-6">
            <div class="section-box">
              <h6>Design & Structure</h6>
              
              <ul>
                <li>Form:Open-back, semi-circular armchair with a low and relaxed posture.</li>
                <li>Combines modern geometry with handcrafted detailing.</li>
               
              </ul>
              </div>
              </div>
              <div class="col-md-6">
            <div class="section-box">
               <h6>Arms:</h6>
              
              <ul>
                <li>Gracefully curved wooden arms integrated with the backrest frame.</li>
                <li>Smooth continuous design forming a loop from back to front.</li>
             </ul>
               
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="section-box">
               <h6>Backrest:</h6>
              
              <ul>
                <li>Arched wooden frame fitted with woven cane, ensuring ventilation and visual lightness.</li>
              </ul>
               
              </div>
            </div>
            <div class="col-md-6">
            <div class="section-box">
               <h6>Seat Base:</h6>
              
              <ul>
                <li>Flat cushioned seat resting on a sturdy wooden frame.</li>
                <li>Compact yet proportionate for comfortable sitting.</li>
              </ul>
              </div>
              </div>
              
              <div class="col-md-6">
               <div class="section-box">
               <h6>Legs:</h6>
              
              <ul>
                <li>Four slightly tapered wooden legs angled outward for stability.</li>
                <li>Clean, mid-century-inspired structure with no ornate carving.</li>
              </ul>
               
              </div>
              </div>
              
            </div>
           
          
            
            
          </div>
      </div>
    </div>
  </div>
</div>







<?php include("footer.php"); ?>