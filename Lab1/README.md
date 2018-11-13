# Lab - Reviewing the CIS Benchmark Report

## Overview
In this Lab we will work to remidaite the findings associated with the CIS Benchmark Report from Evident.  We will be following the steps 


## Enable Evident CIS Benchmark Report

1. Go to [Evident - Control Panel](https://esp.evident.io/control_panel/external_accounts)

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Report2.png)
2. Click on **Compliance**

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Report3.png)
3. Click **Disable** 
4. Click on **Reports** 
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Report4.png)

5. Select **Run Reports**
6. Click **All Teams** 
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Report5.png)

## Review AWS Trusted Advisor Report


1. Go to [Trusted Advisor - AWS Console](https://console.aws.amazon.com/trustedadvisor/home?#/dashboard)
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_TA1.pdf)
2. Click **Security**
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_TA2.pdf)
3. Take a look a the findings

## Review Evident CIS Benchmark Report

1. Login in Evident
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Login.PNG)
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evident_Dashboard.PNG)

2. Click on the CIS AWS Foundations Benchmark
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Evindet_CIS_Report.png)

## Remidate - Identity and Access Management

### Password Policy
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Password_CIS.png)
1. From the CIS Benchmark Report Select **Ensure IAM password policy meets CIS recommendations**

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Password_CIS_Details.png)
2. Select the AWS Account

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Password_Finding.png)
3. Click **Details**

4. Follow the **Rememdiation Steps**


## Networking
### SSH Open to the World
1. From the CIS Benchmark Report select **Ensure no security groups allow ingress from 0.0.0.0/0 to port 22 (Scored) ( 4.1 )**  

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG_CIS.png.png)
2. Select the AWS account
3. Click **Details** next to the finding

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG_Open.png)
4. From the findings page copy the Security Group ID: sg-XXXXXXXXXXXXXXXX

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_VPC_.png)
5. Go to the [VPC - AWS Console](https://console.aws.amazon.com/vpc)

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG1.png)
6. Select **Security Groups** on the left panel

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG2.png)
7. Paste the Security Group ID into the Filter text box
8. Select the box next to the Security Group

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG3.png)
9. Click the tab at the bottom **Inbound Rules**

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG4.png)
10. Click the **Edit** button

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG5.png)
11. Click the **X** under **Remove** to delete the SSH rule

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_SG6.png)
12. Click **Save** 

## Logging
### KMS Key Rotation
![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Key_CIS.png)
1. From the CIS Benchmark Report select **Ensure rotation for customer created CMKs is enabled (Scored)** 

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Key_CIS_Finding.png)
2. Select the AWS account

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_Key_CIS_Details.png)
3. Click **Details**
4. Follow the **Remediation Steps**

### Enable VPC Flow Logs
1. From the CIS Benchmark Report select **Ensure VPC Flow Logging is Enabled in all Applicable Regions (Scored)** 

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_CIS_Logging.png)
2. Select the AWS account

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_CIS_Logging_Findings.png)
3. Enter **WIISLab** in the **Resource** text box
4. Click **Search**

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_CIS_Logging_Detail.png)
5. Click **Details** next to the finding
6. Follow the **Remediation Steps**
