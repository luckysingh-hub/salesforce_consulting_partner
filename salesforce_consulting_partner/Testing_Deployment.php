<?php 
include "../client/app/header.php";
?>
<style>
    .row {
  max-width: 100%;
}

@media (min-width:1200px) and (max-width:991px) {
     .centered .col-sm-2 {
         width: 13.66666% !important
     }
 }

 @media (min-width:992px) and (max-width:767px) {
     .centered .col-sm-2 {
         width: 12.666667% !important
     }
 }

 @media (min-width:768px) {
     .centered .col-sm-2 {
         width: 13.666667% !important
     }
 }
</style>
<section id="banner" style="background-image:url(../client//imageFoleder/Testing_Deployment.webp);">
    <h3 class="line-1 text-white">Testing and Deployment</h3>
</section>
<section class="mt-5">
    <h2 class="heading-API fontColor text-center"><i>Testing Deployment</i></h2>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <img src="../client/imageFoleder/testing and deployment.png" alt="image" style="width:100%; height:380px;">
            </div>
            <div class="col-lg-6">
                <p class="pt-3 heading_p"> The process of data migration in Salesforce pertains to the movement of data from one Salesforce instance 
                    to another. This may be required when a business upgrades from an older version of Salesforce to a more recent one, 
                    or when consolidating several Salesforce instances into a single one.</p>
                 <p class="pt-3 heading_p">
                 To ensure successful testing and deployment, developers typically use various tools and techniques, such as automated 
                 testing, continuous integration, and version control. These processes help identify and fix any issues before releasing 
                 the application to end-users. Additionally, developers must follow best practices and adhere to Salesforce's security and 
                 compliance guidelines to ensure data privacy and protection.
                 </p>
                
            </div>
            <h2 class="pt-1 heading_titel"> Why Do We Need Salesforce Testing? </h2>
            <p class="pt-3 heading_p"> The Salesforce platform is extremely adaptable and inclusive, allowing businesses to personalize it to suit their individual needs with ease. 
                It offers a diverse range of resources, tools, and an extensive third-party integration ecosystem through the AppExchange marketplace, all of which can be utilized to customize the platform. 
                However, given the complexity of the system, conflicts may occur. </p>
            <p class="pt-3 heading_p"> When upgrading Salesforce to a newer version, it can conflict with the existing customizations </p>
            <p class="pt-6 "> New external systems, APIs, and integrations may clash with already installed integrations </p>
            <p class="pt-6 "> New data validation rules can be too strict or inconsistent with existing data, causing issues with data entry and updates </p>
            <p class="pt-6 "> Heavy data processing can impact performance </p>
            <p class="pt-6 "> Customizations that modify user access controls can lead to security issues </p>
            <p class="pt-3 heading_p"> By conducting comprehensive testing, the QA team can identify and resolve areas of conflict in a timely manner prior to release, thereby minimizing the adverse effects of bugs on the company's profits. Along with examining customizations, Salesforce testing offers the same advantages as performing typical software testing. </p>
            <p class="pt-6 "> Ensure system reliability and stability </p>
            <p class="pt-6 "> Minimize risk of system failures, data loss, or performance issues </p>
            <p class="pt-6 "> Maintain data integrity in the system </p>
            <p class="pt-6 "> Improve user experience by identifying and eliminating friction </p>
            <p class="pt-6 "> Ensure compliance and security </p>
            </div>
            <h2 class="pt-1 heading_titel"> Salesforce CI/CD using Azure DevOps </h2>
            <p class="pt-3 heading_p"> Getting the Fundamentals right Before we dive in to the setup and configurations of the DevOps process, 
                we should have a clear understanding of what Continuos Integration (CI) is and what Continuous Delivery (CD) Is.</p>
            <p class="pt-6 heading_p"> <b>Continuous Integration (CI)</b> is not a tool. It is a practice. </p>
            <p class="pt-6 "> It is a practice for integrating the work of all developers into a common codebase. </p>
            <p class="pt-6 "> It involves running tests automatically when code is changed. </p>
            <p class="pt-6 "> It also involves detecting broken build & tests in few seconds to keep process flowing. </p>
            <p class="pt-6 "> <b> Continuous Delivery (CD)</b> is not a tool. It is a practice. </p>
            <p class="pt-6 "> It also involves propagating changes from PROD to DEV to keep orgs in sync. </p>
            <p class="pt-6 "> <b>Understanding the current Development Model</b> As of today, Salesforce recommends two development models. </p>
            <p class="pt-6 "> Package Development Model </p>
            <p class="pt-6 "> Org Development Model </p>
            <p class="pt-3 "> We need to set the deployment strategy in alignment with the development models. 
                In Package Development Model, Every artefact is bundled into a package and deployed separately 
                Package should be self-sufficient & isolated Requires the organization to have adherence to architectural 
                principles, existence of frameworks, horizontal & vertically sliced concerns addressed Even though Package 
                Development Model appears close to what we want to have, do not force yourself into package development if 
                your organizational practices are not package based. Package Development Model would vision to release features 
                as a package which is vertically and horizontally sliced. Any impacts that occur would only happen in that package/app 
                and it would not affect the other packages/apps. Getting to the package development model maturity itself is a huge effort on its own. </p>
            <p class="pt-6 "> In Org Development Model, </p>
            <p class="pt-6 "> Artefacts are bundled as functionalities/features for deployment (like a changeset bundle) </p>
            <p class="pt-6 "> Deployments are org based and not package based </p>
            <p class="pt-6 "> Org Development Model is a common development model that most organizations follow. Every feature developed would be bundled into a changeset and be deployed to an org. Post deployment, QA would do a smoke testing and a regression testing just to ensure nothing in the org is impacted. </p>
            <p class="pt-6 "> Now, let’s define the problem statement. </p>
            <p class="pt-6 "> ABC Company uses Salesforce CRM for their business. They have a development team that develops functionalities as per business request in a Developer Sandbox. The team lead/team manager/deployment manager collects the list of items developed for each functionality from the developer, prepares changeset and deploys to QA Sandbox when it is ready for QA testing. After QA testing is pass, those functionalities are queued for PROD deployment which happens once every 2 weeks. The team lead/team manager/deployment manager again creates the changeset for PROD deployment and executes them every 2 weeks and initimates the organization stakeholders. For your information, they use Azure repositories for code management for their website development team. </p>
            <p class="pt-6 heading_titel"> Key items to consider for deployment strategy </p>
            <p class="pt-6 "> It is clear that ABC company uses Org Development Model. So, we need to understand that anything related to package development model (even though it is fancy and attractive) should not be forced. </p>
            <p class="pt-6 "> They already use Azure repositories for version control needs. So, it is worth using Azure repo for SF code management. </p>
            <p class="pt-6 "> Azure has out of the box features for Devops which is called Azure DevOps services. This can be used as a tool for CI/CD. </p>
            <p class="pt-6 heading_titel"> Things that we need before we start the DevOps configurations </p>
            <p class="pt-6 "> Salesforce Developer Org [if you don’t have one, signup and get a free personal dev org] </p>
            <p class="pt-6 "> Developer Azure account [just go to dev.azure.com and register with your microsoft personal email address] </p>
            <p class="pt-6 "> Salesforce CLI installed locally </p>
            <p class="pt-6 "> Visual Studio Code installed locally with “Salesforce Extension Pack” installed. </p>
            <p class="pt-6 "> Git (either via npm or as installer) </p>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
<div class="section-heading">
Development
            <span>Life Cycle</span>
            <div class="section-line"></div>
        </div>
    <div class="container-fluid">
      <div id="process" class="row centered animated">
        <div class="col-sm-2 col-sm-offset-1 processBlock one">
          <div class="processDot">&nbsp;</div>
          <div class="processText text-start">Planning</div>
        </div>
        <div class="col-sm-2 processBlock two">
          <div class="processDot">&nbsp;</div>
          <div class="processText topProcess text-start">Define<br>Requirements</div>
        </div>
        <div class="col-sm-2 processBlock three">
          <div class="processDot">&nbsp;</div>
          <div class="processText text-start">Design & <br>Prototyping</div>
        </div>
        <div class="col-sm-2 processBlock four">
          <div class="processDot">&nbsp;</div>
          <div class="processText topProcess text-start">Software <br>Development</div>
        </div>
        <div class="col-sm-2 processBlock five">
          <div class="processDot">&nbsp;</div>
          <div class="processText text-start">Testing</div>
        </div>
        <div class="col-sm-2 processBlock six">
          <div class="processDot">&nbsp;</div>
          <div class="processText topProcess text-start">Deployment</div>
        </div>
        <div class="col-sm-2 processLast sevan">
          <div class="processDot lastDot">&nbsp;</div>
          <div class="processText text-start"><span>Operations</span> <span class="text-center ">&</span><br>Maintenance</div>
        </div>
      </div>
    </div>
</section>
<section class="mt-5 text-white " style="background-image: url(../client//imageFoleder/background3.jpg);" id="Industries">
    <div class="container text-center">
        <div class="section-heading">
            We Serve
            <span class="text-white">to Industries</span>
            <div class="section-line"></div>
        </div>
        <div class="owl-carousel" id="serveToIndustrie">
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//people-graduating-with-diplomas-close-up.jpg" alt="Education" />
                <p class="Industriestitle">Education</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//banking-saving-money-management-account-concept.jpg" alt="Bank" />
                <p class="Industriestitle">Bank</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//Healthcare Tech_ Role Of IT Departments Will Change Fundamentally - Forbes India Blogs.jpg" alt="Healthcare" />
                <p class="Industriestitle">Healthcare</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//Detroit Automotive Manufacturer Gets $360K Grant for Expansion.png" alt="Manufacturing" />
                <p class="Industriestitle">Manufacturing</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//Premium Photo _ Business accounting in office concept.jpg" alt="Finance" />
                <p class="Industriestitle">Finance</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//Premium Photo _ Medical insurance  with family  and stethoscope on wooden desk.jpg" alt="Insurance" />
                <p class="Industriestitle">Insurance</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//ngo-min.jpg" alt="Insurance" />
                <p class="Industriestitle">NGO</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
            <div id="Industriescontainer">
                <img src="../client//imageFoleder//Shipping-min.jpg" alt="Insurance" />
                <p class="Industriestitle">Shipping</p>
                <div class="Industriesoverlay"></div>
                <div class="button"><a href="#!">More</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 bg-light">
    <div class="container">
    <h2 class="pt-5 heading_titel"> Types of Salesforce testing and deployment</h2>
            <div class="accordion mt-2 mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Unit Testing
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing individual components of a Salesforce application to ensure that they function as expected.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Integration Testing
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It verifies the interaction between different components of the Salesforce application and external systems.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Regression Testing
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It ensures that the changes made to the Salesforce environment do not negatively impact existing functionalities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        User Acceptance Testing (UAT)
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing the changes made to the Salesforce environment from an end-user perspective to ensure that they meet their requirements.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Performance Testing
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It tests the performance of the Salesforce application under various conditions to ensure that it can handle expected traffic.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Continuous Integration and Continuous Deployment (CI/CD)
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It automates the testing and deployment process to enable faster and more frequent releases.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsaven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesaven" aria-expanded="false" aria-controls="collapsesaven">
                        Sandbox Testing
                        </button>
                    </h2>
                    <div id="collapsesaven" class="accordion-collapse collapse" aria-labelledby="headingsaven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It involves testing changes in a separate Salesforce environment to avoid impacting the production environment.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingeight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Production Deployment
                        </button>
                    </h2>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        It is the process of releasing changes to the live Salesforce environment after successful testing and approval.
                        </div>
                    </div>
                </div>

            </div>
    </div>
</section>

<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include END -->	