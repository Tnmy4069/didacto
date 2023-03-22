<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60ddb07c65b7290ac638e417/1f9gviqoc';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

</head>

<body>
    <?php

    require '../include/dbconnect.php';
    require '../include/navbar.php';
    $phone = $_SESSION['username'];
    include '../include/fetchdata.php';

    ?>
<div class="container mt-3 ">

        <p>

            <button class=" btn btn-danger btn-outline" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Instruction (Must read) before Creating Cources
            </button>



        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
               <p>
                    INDEPENDENT Didactor (Tutor/ Teacher) AGREEMENT<br>
This is a legal agreement (&quot;Agreement&quot;) between you, the Independent Didactor (Tutor/ Teacher) (&quot;Didactor (Tutor/ Teacher)&quot;), and Didactology, Inc. (&quot;Didactology&quot;). The parties expressly agree to transact and enter into this Agreement by electronic means within the meaning of the law of India.<br>
<br>
1. Didactor (Tutor/ Teacher)s Status.&#160;Neither this Agreement, the Terms of Use, nor use of the Didactology website (&quot;Site&quot;) creates an independent contractor, employee/employer, partnership, joint venture, or franchiser-franchisee relationship between Didactor (Tutor/ Teacher) and Didactology. It is the parties&rsquo; intention that the Didactor (Tutor/ Teacher) will be an independent provider of Didactor (Tutor/ Teacher)ing services (&quot;Independent Didactor (Tutor/ Teacher)&quot;) and not an independent contractor of Didactology or Didactology&rsquo;s employee for any purposes, including, without limitation, the application of the any respective laws, any income tax law, any workers&rsquo; compensation laws. Didactor (Tutor/ Teacher) acknowledges that Didactology provides only an Internet-based marketplace for individuals seeking the services of a Didactor (Tutor/ Teacher) to identify and retain the services of individuals seeking to provide Didactor (Tutor/ Teacher)ing services. Didactor (Tutor/ Teacher) further acknowledges that Didactology does not directly or indirectly engage Didactor (Tutor/ Teacher) to render any services whatsoever and that any engagement of the Didactor (Tutor/ Teacher)&rsquo;s services through the Site is undertaken exclusively by the individual who has selected Didactor (Tutor/ Teacher) through the Site to provide Didactor (Tutor/ Teacher)ing services (&quot;Didactology student&quot;).<br>
<br>
2. Description of Work.&#160;The Didactor (Tutor/ Teacher) will be responsible for providing Didactor (Tutor/ Teacher)ing instruction (&quot;Sessions&quot;). The Didactor (Tutor/ Teacher) will retain absolute discretion as to the manner and means of carrying out Didactor (Tutor/ Teacher)&rsquo;s Didactor (Tutor/ Teacher)ing services. Didactor (Tutor/ Teacher)ing sessions cancellations should follow the guideline explained in the FAQ Documentation.<br>
<br>
3. Non-exclusivity.&#160;Didactor (Tutor/ Teacher) and Didactology acknowledge that this Agreement is nonexclusive and Didactor (Tutor/ Teacher) is free to engage in and simultaneously perform any employment or other services during the pendency of this Agreement. Nothing herein precludes Didactor (Tutor/ Teacher) from advertising or providing Didactor (Tutor/ Teacher)&rsquo;s services to the general public.<br>
<br>
4. Hours.&#160;Didactor (Tutor/ Teacher) shall set Didactor (Tutor/ Teacher)&rsquo;s own hours and schedule Didactor (Tutor/ Teacher)&rsquo;s own Sessions in Didactology. Didactor (Tutor/ Teacher) shall generally render services as needed to perform Didactor (Tutor/ Teacher)&rsquo;s duties hereunder as set forth in the Description of Work.<br>
<br>
5. Commission.&#160;Didactor (Tutor/ Teacher) determines and adjusts Didactor (Tutor/ Teacher)&rsquo;s own hourly Session rate. Didactor (Tutor/ Teacher) shall receive that rate less a percentage paid to Didactology for its services. The percentage is based on the total number of Session hours Didactor (Tutor/ Teacher) has Didactor (Tutor/ Teacher)ed to students through Didactology as set forth in the&#160;Didactor (Tutor/ Teacher) Payment Policies. <br>
<br>
Didactor (Tutor/ Teacher) shall be paid by a Didactology student who has retained Didactor (Tutor/ Teacher) through the Site through the Didactology payment processing system for any services rendered to Didactology students. Under no circumstances is Didactor (Tutor/ Teacher) to attempt to seek or receive compensation directly from Didactology students. Prior to commencing Sessions or meeting with Didactology students for any purpose, Didactor (Tutor/ Teacher) must verify with Didactology that the student has submitted appropriate billing information. Didactology is not responsible for payments for Sessions given before a student has appropriate billing information on file or the sufficient credits. For student billing purposes, Didactor (Tutor/ Teacher) will report the length of each session completed through the Didactor (Tutor/ Teacher)&rsquo;s administrative page on Didactology&rsquo;s website (Didactology.com.my). If requested by the student and for their use, the Didactor (Tutor/ Teacher)Me will enter a summary of service performed via the dashboard at Didactology.com.my. Subject to the review by the student of the session times submitted, Didactor (Tutor/ Teacher) shall be paid in accordance with Didactology&rsquo;s&#160;Didactor (Tutor/ Teacher) Payment Policies.<br>
<br>
6. Payment System.&#160;Didactor (Tutor/ Teacher) agrees to abide by Didactology&rsquo;s&#160;Didactor (Tutor/ Teacher) Payment Policies. Didactor (Tutor/ Teacher) also agrees not to subvert the payment system or to divert funds ordinarily payable to Didactor (Tutor/ Teacher) through Didactology.<br>
<br>
7. Expenses.&#160;Didactor (Tutor/ Teacher) is solely responsible for all costs and expenses related to the services provided hereunder including, but not limited to, expenses associated with preparing for and administering Sessions, educational materials, IT and transportation. Didactology will not be liable to Didactor (Tutor/ Teacher) for any expenses incurred in the rendition of services.<br>
<br>
8. Supplies.&#160;Didactor (Tutor/ Teacher) will provide Didactor (Tutor/ Teacher)&rsquo;s own supplies and equipment required to complete the tasks for which he was retained.<br>
<br>
9. Taxes.&#160;Didactor (Tutor/ Teacher) is responsible for all taxation matter with Lembaga Hasil Dalam Negeri. No fund shall be withheld by Didactology on behalf of Didactor (Tutor/ Teacher). Didactor (Tutor/ Teacher) understands that it is Didactor (Tutor/ Teacher)&rsquo;s responsibility to pay any applicable taxes. <br>
<br>
10. Benefits.&#160;Didactor (Tutor/ Teacher) acknowledges that Didactor (Tutor/ Teacher) is engaged in an independent business and is not eligible to participate in any KWSP, SOCSO, pension, health, or other fringe benefits plan of Didactology.<br>
<br>
11. Insurance.&#160;No workers&rsquo; compensation insurance shall be obtained by Didactology for Didactor (Tutor/ Teacher). Didactor (Tutor/ Teacher) understands that it is Didactor (Tutor/ Teacher)&rsquo;s responsibility to comply with any applicable workers&rsquo; compensation law.<br>
<br>
12. Confidentiality.&#160;Didactor (Tutor/ Teacher) acknowledges that, during the performance of services, Didactor (Tutor/ Teacher) will may have access to information relating to student&rsquo;s identity, address, contact information, and other personal information or requests for services hereinafter &quot;Confidential Information&quot;. Didactor (Tutor/ Teacher) agrees that Didactor (Tutor/ Teacher) owes a duty to Didactology and such third parties, during the term of this Agreement and thereafter, to hold all such Confidential Information in the strictest confidence in accordance to the Personal Data and Protection Act 2010 and not to disclose it to any person, firm or corporation or to use it except as necessary in carrying out the services consistent with this Agreement.<br>
<br>
13. Didactor (Tutor/ Teacher)s Documents.&#160;Didactor (Tutor/ Teacher) acknowledges that a copy of all documents created or received by Didactor (Tutor/ Teacher) in connection with the administration of services performed hereunder (&quot;Didactor (Tutor/ Teacher) Documents&quot;) may be retained by Didactology and used for its administrative purposes. For purposes of this Agreement, Didactor (Tutor/ Teacher) Documents does not include materials solely associated with the teaching of Sessions including Session plans, notes, outlines, tests and homework and Didactology acknowledges these materials belong to the Didactor (Tutor/ Teacher).<br>
<br>
14. Indemnity and Hold Harmless Clause.&#160;Didactor (Tutor/ Teacher) agrees to indemnify and hold harmless Didactology, its subsidiaries, affiliates, and their directors, officers, employees and agents, from and against any and all losses, expenses, costs, liabilities and damages (including any legal fee and expenses), any and all injuries, whether direct, consequential or incidental in nature, which result from, are connected with or arise out of the performance by Didactor (Tutor/ Teacher) of work performed in relation to this Agreement, including any act by Didactor (Tutor/ Teacher) inconsistent with Didactor (Tutor/ Teacher)&rsquo;s status as an Independent Didactor (Tutor/ Teacher).<br>
<br>
Didactor (Tutor/ Teacher) understands that Didactology offers an Internet-based marketplace for those seeking Didactor (Tutor/ Teacher)ing services to connect with those seeking to provide Didactor (Tutor/ Teacher)ing services. Accordingly, Didactology makes no representations to Didactor (Tutor/ Teacher) about the suitability, character or background of any Didactology user (including, without limitation, Didactology students or their parents or guardians), nor does Didactology perform any type of background check of users including, without limitation, Didactology students or their parents or guardians). It is Didactor (Tutor/ Teacher)&rsquo;s sole duty to exercise Didactor (Tutor/ Teacher)&rsquo;s own judgment, protocols and/or standards when considering whether to engage in Didactor (Tutor/ Teacher)ing services with each student or client. Didactor (Tutor/ Teacher) understands and agrees that it is Didactor (Tutor/ Teacher)&rsquo;s responsibility to conduct any and all background and reference checks regarding other Didactology users. Didactor (Tutor/ Teacher) is never obligated by Didactology to pursue any Didactor (Tutor/ Teacher)ing opportunity.<br>
<br>
15. Site Content.&#160;Didactor (Tutor/ Teacher) acknowledges that all site content submitted by Didactor (Tutor/ Teacher) will be the property of Didactology and may be distributed by Didactology at the company&rsquo;s sole discretion. Such content includes, but is not limited to, articles, lessons, worksheets, quizzes, Didactor (Tutor/ Teacher)ials, files, testimonials, reviews, video submissions, and blog entries (&quot;Site Content&quot;).<br>
<br>
16. Copyright Ownership.&#160;Didactor (Tutor/ Teacher) acknowledges that the Site Content Didactor (Tutor/ Teacher) creates for use on the Site is being created by a Didactor (Tutor/ Teacher) as a &quot;work made for hire&quot; at all stages of development, the Site Content shall be and remain the sole and exclusive property of Didactology. At Didactology&rsquo;s sole, absolute and unfettered discretion, Didactology may make any changes in, deletions from, or additions to the Site Content. If for any reason the Site Content Didactor (Tutor/ Teacher) creates hereunder is determined at any time not to be a work made for hire, Didactor (Tutor/ Teacher) hereby irrevocably transfers and assigns to Didactology all right, title and interest therein, including all copyrights, as well as all renewals and extensions thereto.<br>
<br>
17. Term.&#160;This Agreement and the respective duties of the parties hereunder shall continue until terminated by either party in accordance with this Agreement.<br>
<br>
18. Assignment.&#160;Didactor (Tutor/ Teacher) may not assign or transfer this Agreement without the prior written consent of Didactology.<br>
<br>
19. Termination of Relationship.&#160;Either party may terminate this Agreement for any reason at any time.<br>
<br>
20. Amendment.&#160;This Agreement may only be amended or modified by a writing which makes express reference to this Agreement as the subject of such amendment and which is signed by Didactor (Tutor/ Teacher) and, on behalf of Didactology, by its duly authorized officer. The parties agree that any amendment or modification hereunder may be transacted by electronic means within the meaning of respective law of Malaysia provided that that any such amendments or modifications otherwise comply with the requirements in this paragraph.<br>
<br>
21. Severability.&#160;If any term, provision, covenant or condition of this Agreement or part thereof, or the application thereof to any person, place or circumstance, shall be held to be invalid, unenforceable or void, the remainder of this Agreement and such term, provision, covenant, or condition shall remain in full force and effect, and any such invalid, unenforceable or void term, provision, covenant or condition shall be deemed, without further action on the part of the parties hereto, modified, amended and limited to the extent necessary to render the same and the remainder of this Agreement valid, enforceable and lawful.<br>
<br>
22. Incorporation of Terms of use.&#160;The Didactology&#160;Terms of Use&#160;are hereby incorporated into this Agreement.<br>
<br>
23. Terms of Arrangement.&#160;Didactology accepts a Didactor (Tutor/ Teacher) as user for an indefinite period, subject to the provisions of this Agreement. Didactor (Tutor/ Teacher)s have been removed from the website in the past for a material breach of this Agreement and for a failure to follow Didactology&rsquo;s administrative procedures.<br>
<br>
24. Governing Law.&#160;This Agreement shall be governed by and construed in accordance with the substantive laws of Malaysia, without regard to conflict of law rules.<br>
<br>
25. Arbitration.&#160;Any dispute between the parties related to this Agreement shall be resolved by binding arbitration in accordance with the Arbitration provision in the Didactology&#160;Terms of Use.<br>
<br>
26. Entire agreement.&#160;This Agreement contains the entire agreement and understanding between the parties hereto in respect to the subject matter hereof and supersedes, cancels and annuls any prior or contemporaneous written or oral agreements, understandings, commitments, and practices between them respecting the subject matter hereof, including all prior agreements, if any, between Didactology and Didactor (Tutor/ Teacher), which agreement(s) hereby are terminated and shall be of no further force or effect
               </p>
            </div>
        </div>
   

    </div>

<?php
if($tboard == "State Board"){
    $tboard = "State";
}

?>
    <hr>
    
    <div class="container" id="main">
        <div class="container" id="form">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <form method="get" action="generate.php">
                        <label for="">Teacher ID</label>
                        <input type="text" value="<?php echo "$tuid"; ?>" class="form-control" name="trid" id="" aria-describedby="helpId" placeholder="" readonly>
                                                

                    </div>

                    <div class="col">
                        <label for="">Teacher Board</label>
                        <input type="text" value="<?php echo "$tboard"; ?>" class="form-control" name="trboard" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <label for="">Teacher Name</label>
                        <input type="text" value="<?php echo "$tfname"."$tlname"; ?>" class="form-control" name="trname" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>

                    <div class="col">
                        <label for="">Class</label>
                        <input type="text" value="<?php echo "$tclass"; ?>" class="form-control" name="trclass" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3" style="margin:auto;">
                        <label for="">Course ID</label>
                        <input type="text" value="<?php echo "$tuid" . "C01"; ?>" class="form-control" name="cid" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>
            </div>

            <hr>



           
                <div class="form-group row">
                    <label for="cname" class="col-4 col-form-label">Course Name</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="cname" name="cname" placeholder="for E.g Doubt Solving" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="csubject" class="col-4 col-form-label">Course Subject</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-archive"></i>
                                </div>
                            </div>
                            <input id="csubject" name="csubject" placeholder="for e.g Maths or Coding" type="text" required="required" class="form-control">
                            <input id="phone" name="phone" type="hidden" value="<?php echo $_COOKIE['phone']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Course Description</label>
                    <div class="col-8">
                        <textarea id="cdesc" name="cdesc" cols="40" rows="6" required="required" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cduration" class="col-4 col-form-label">Course Duration and Timing</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <input id="cduration" name="cduration" placeholder="1year - mon to fri - 2hr" type="text" aria-describedby="cdurationHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="cdurationHelpBlock" class="form-text text-muted">Please use understandable format (example : 1year - mon to fri - 2hr)</span>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Tutoring Time</label>
                    <div class="col-8">
                        <input type="text" id="cdesc" name="time"  placeholder="Your Lecture time" required="required" class="form-control"></textarea>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Demo Video Link 1</label>
                    <div class="col-8">
                        <input type="text" id="cdesc" name="link1"  placeholder="YouTube/ Google Drive Link, Make sure we can watch the Video" required="required" class="form-control"></textarea>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Demo Video Link 2</label>
                    <div class="col-8">
                        <input type="text" id="cdesc" name="link2"  placeholder="YouTube/ Google Drive Link, Make sure we can watch the Video" required="required" class="form-control"></textarea>
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Demo Video Link 3</label>
                    <div class="col-8">
                        <input type="text" id="cdesc" name="link3"  placeholder="YouTube/ Google Drive Link, Make sure we can watch the Video" required="required" class="form-control"></textarea>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="camt" class="col-4 col-form-label">Course Amount</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                   Rs.
                                </div>
                            </div>
                            <input id="camt" name="camt" type="text" aria-describedby="camtHelpBlock" class="form-control">
                        </div>
                        <span id="camtHelpBlock" class="form-text text-muted">Please enter full fledge amount</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>