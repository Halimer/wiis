## Pre Lab Setup - AWS Environment
In this section we are going to create an SSH key then deploy some resources into your AWS account via CloudFormation. 

## Creating a Key Pair Using Amazon EC2
![](https://github.com/Halimer/wiis/blob/master/images/AWS_EC2.png)

1. Open the Amazon EC2 console at [https://console.aws.amazon.com/ec2/](https://console.aws.amazon.com/ec2/).
2. In the navigation pane, under NETWORK & SECURITY, choose **Key Pairs**.

Note
The navigation pane is on the left side of the Amazon EC2 console. If you do not see the pane, it might be minimized; choose the arrow to expand the pane.

![](https://github.com/Halimer/wiis/blob/master/images/AWS_Key_Pair.png)

2. Choose **Create Key Pair**.

![](https://github.com/Halimer/wiis/blob/master/images/AWS_Key_Pair_Name.png)

3. Enter a **WIIS-Lab** in the Key pair name field of the Create Key Pair dialog box, and then choose **Create**.
4. The private key file is automatically downloaded by your browser. The base file name is the name you specified as the name of your key pair, and the file name extension is .pem. Save the private key file in a safe place.

**Important**

This is the only chance for you to save the private key file. You'll need to provide the name of your key pair when you launch an instance and the corresponding private key each time you connect to the instance.

## Deploy CloudFormation

1. Open the [AWS CloudFormation console](https://console.aws.amazon.com/cloudformation/), choose **Create Stack**

![](https://github.com/Halimer/wiis/blob/master/images/CFT_S3_Template.png)

2. Choose specify an Amazon S3 template URL
3. Enter this URL into text box [https://s3-us-west-2.amazonaws.com/johammer/Public/LabEnvironment.template](https://s3-us-west-2.amazonaws.com/johammer/Public/LabEnvironment.template)
4. Click the **Next** button

![](https://github.com/Halimer/wiis/blob/master/images/CFT_Details_Template.png)

5. Enter the 'WIISLab' as the **Stack Name**
6. Select 't2.micro' as the **InstanceType**
7. Select 'WIIS-Lab-<Region>' as the **KeyName**
8. Click the **Next** button

![](https://github.com/Halimer/wiis/blob/master/images/CFT_Options.png)

9. Under **Key** enter 'Name'
10. Under **Value** enter 'WIIS Lab'
11. Click the **Next** button

![](https://github.com/Halimer/wiis/blob/master/images/CFT_Review.png)

12. Select 'I acknowledge that AWS CloudFormation might create IAM resources.'
13. Click the **Create** button

![](https://github.com/Halimer/wiis/blob/master/images/CFT_Create_In_Progress.png)

14. Select the **WIISLab**
15. Click the ![](https://github.com/Halimer/wiis/blob/master/images/CFT_Refresh_Button.png)
16. Repaeat every few minutes until **Status** is **Create_Complete**

![](https://github.com/Halimer/wiis/blob/master/images/CFT_Create_Complete.png)

17. Select **Outputs**
18. Click on **URL**
19. You should see the below

![](https://github.com/Halimer/wiis/blob/master/images/CFT_website.png)

20. Now let's setup [Evident](https://github.com/Halimer/wiis/blob/master/Evident_Lab_Setup/README.md)
