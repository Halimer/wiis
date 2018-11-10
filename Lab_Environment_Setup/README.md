## Pre Lab Setup
In this section we are going to create an SSH key then deploy some resources into your AWS account via CloudFormation.  Then we are going to signup for a Palo Alto Networks Evident account and add our AWS to be scanned by it.

## Pre Lab Evinorment Setup
### Create an SSH Key Pair
1. Login into the [AWS Console](http://console.aws.amazon.com/)
2. Create an SSH Key (Mike W to provide)


## Deploy CloudFormation

1. Open the [AWS CloudFormation console](https://console.aws.amazon.com/cloudformation/), choose **Create Stack**

![](images/CFT_S3_Template.png)

2. Choose specify an Amazon S3 template URL
3. Enter this URL into text box [https://s3-us-west-2.amazonaws.com/johammer/Public/LabEnvironment.template](https://s3-us-west-2.amazonaws.com/johammer/Public/LabEnvironment.template)
4. Click the **Next** button

![](./images/CFT_Details_Template.png)

5. Enter the 'WIISLab' as the **Stack Name**
6. Select 't2.micro' as the **InstanceType**
7. Select 'WIIS-Lab-<Region>' as the **KeyName**
8. Click the **Next** button

![](./images/CFT_Options.png)

9. Under **Key** enter 'Name'
10. Under **Value** enter 'WIIS Lab'
11. Click the **Next** button

![](./images/CFT_Review.png)

12. Select 'I acknowledge that AWS CloudFormation might create IAM resources.'
13. Click the **Create** button

![](./images/CFT_Create_In_Progress.png)

14. Select the 'WIISLab'
15. Click the ![](./images/CFT_Refresh_Button.png)
16. Repaeat every few minutes until **Status** is **Create_Complete**

![](./images/CFT_Create_Complete.png)

17. Select **Outputs**
18. Click on **URL**
19. You should see the below

![](./images/CFT_Website.png)








2. [Sign Up for Evident](https://esp.evident.io/users/sign_up)
3. [Add your AWS Account into Evident](https://esp.evident.io/control_panel/external_accounts/new#?provider=AWS) or

Click the ![](images/Evident_Add_External_Account.png) from the Evident console