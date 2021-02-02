<?php
include './components/header.php'; ?>

    <!-- Main header start -->
    <header class="main-header header-2 fixed-header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo pad-0" href="index.html">
            <img src="./assets/img/black-logo.png" alt="logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
              <li class="nav-item dropdown">
                <a href="dashboard.html" class="nav-link">Dashboard</a>
              </li>
              <li class="nav-item dropdown active">
                <a href="employer-dashboard-post-job.html" class="nav-link"
                  >Post a Job</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  href="employer-dashboard-manage-candidate.html"
                  class="nav-link"
                  >Manage Candidate</a
                >
              </li>
              <li class="nav-item dropdown">
                <a href="employer-dashboard-manage-job.html" class="nav-link"
                  >Manage Jobs</a
                >
              </li>
              <li class="nav-item dropdown">
                <a href="employer-dashboard-messages.html" class="nav-link"
                  >Messages</a
                >
              </li>
              <li class="nav-item dropdown">
                <a href="employer-dashboard-transaction.html" class="nav-link"
                  >Transaction</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  href="employer-dashboard-change-password.html"
                  class="nav-link"
                  >Change Password</a
                >
              </li>
              <li class="nav-item dropdown">
                <a href="employer-dashboard-edit-profile.html" class="nav-link"
                  >Edit Profile</a
                >
              </li>
              <li class="nav-item dropdown">
                <a href="index.html" class="nav-link">Logout</a>
              </li>
            </ul>
            <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
              <ul>
                <li>
                  <div class="dropdown btns">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                      <img src="./assets/img/avatar-1.jpg" alt="avatar" />
                      Hi, John
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="employer-dashboard.html"
                        >Dashboard</a
                      >
                      <a
                        class="dropdown-item"
                        href="employer-dashboard-messages.html"
                        >Messages</a
                      >
                      <a
                        class="dropdown-item"
                        href="employer-dashboard-edit-profile.html"
                        >Edit profile</a
                      >
                      <a class="dropdown-item" href="index.html">Logout</a>
                    </div>
                  </div>
                </li>
                <li>
                  <a
                    href="employer-dashboard-post-job.html"
                    class="nav-link link-color"
                    ><i class="fas fa-plus"></i> Post a Job</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Main header end -->
   
   <!-- Dashboard start -->
   <div class="dashboard">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-pad"></div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
            <div class="content-area5 dashboard-content">
              <div class="dashboard-header clearfix">
                <div class="row">
                  <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
                  <div class="col-sm-12 col-md-6">
                    <div class="breadcrumb-nav">
                      <ul>
                        <li>
                          <a href="index.html">Index</a>
                        </li>
                        <li>
                          <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="active">Post a Job</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="submit-address dashboard-list">
                <form method="GET">
                  <h4 class="bg-grea-3">Basic Information</h4>
                  <div class="search-contents-sidebar">
                    <div class="row pad-20">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Job Title</label>
                          <input
                            type="text"
                            class="input-text form-control"
                            name="your name"
                            placeholder="Your Title"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Job Type</label>
                          <select
                            class="selectpicker search-fields form-control"
                            name="job-type"
                          >
                            <option>Job Type</option>
                            <option>Full time</option>
                            <option>Part time</option>
                            <option>Freelance</option>
                            <option>Temporary</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Job Category</label>
                          <select
                            class="selectpicker search-fields form-control"
                            name="job-category"
                          >
                            <option>Job Category</option>
                            <option>Accounting / Finance</option>
                            <option>Restaurant / Food Service</option>
                            <option>Counseling</option>
                            <option>Health Care</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Location</label>
                          <input
                            type="text"
                            class="input-text form-control"
                            name="your name"
                            placeholder="Location"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Salary</label>
                          <input
                            type="text"
                            class="input-text form-control"
                            name="your name"
                            placeholder="USD"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Gender</label>
                          <select
                            class="selectpicker search-fields form-control"
                            name="Gender"
                          >
                            <option>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label>Country</label>
                            <select
                              class="selectpicker search-fields form-control"
                              name="Country"
                            >
                              <option>Country</option>
                              <option>Usa</option>
                              <option>Bangladesh</option>
                              <option>Indea</option>
                              <option>Canada</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label>City</label>
                            <select
                              class="selectpicker search-fields form-control"
                              name="City"
                            >
                              <option>City</option>
                              <option>Dhaka</option>
                              <option>Dubai</option>
                              <option>Mumbai</option>
                              <option>Califonia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Qualification</label>
                          <select
                            class="selectpicker search-fields form-control"
                            name="Qualification"
                          >
                            <option>Qualification</option>
                            <option>Matriculation</option>
                            <option>Gradute</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Experience</label>
                          <select
                            class="selectpicker search-fields form-control"
                            name="Experience"
                          >
                            <option>Experience</option>
                            <option>1 Year</option>
                            <option>2 Year</option>
                            <option>3 Year</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Job Description</label>
                          <textarea
                            class="input-text form-control"
                            name="message"
                            placeholder="Detailed Information"
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6 inline-btn">
                        <div class="upload-button">
                          <input
                            type="file"
                            id="upload"
                            style="display: none;"
                          />
                          <label
                            for="upload"
                            class="btn btn-outline-primary btn-lg"
                            >Upload Files</label
                          >
                        </div>
                        <div>
                          <a href="#" class="btn btn-primary btn-lg"
                            >Post a Job</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <p class="sub-banner-2 text-center">
                © 2019 Theme Vessel. Trademarks and brands are the property of
                their respective owners.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Dashboard end -->

    
