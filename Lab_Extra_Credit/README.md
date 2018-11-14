
# Extra Credit Labs
Congratulations!! In this lab we will enable multi-factor authentication for our Lab IAM User and look at security alerts in GuardDuty.


## View Guard Duty Findings
1. Go to [GuardDuty Console](https://console.aws.amazon.com/guardduty)
![](https://github.com/Halimer/wiis/blob/master/images/Extra_Credit_GD1.png)

2. Click on the finding
![](https://github.com/Halimer/wiis/blob/master/images/Extra_Credit_GD2.png)


## Enable - Multi-Factor Authentication 
1. From the CIS Benchmark Report select **Ensure multi-factor authentication (MFA) is enabled for all IAM users that have a console password**

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_MFA_Not_CIS_Enabled.png)
2. Select the AWS account

![](https://github.com/Halimer/wiis/blob/master/images/Lab1_MFA_Not_Enabled.png)
3. Click **Details** next to the finding asscociated for user that starts with **WIISLab-mylabuser**
4. From the finding click the link **[Enabling a Virtual Multi-factor Authentication (MFA) Device](https://docs.aws.amazon.com/IAM/latest/UserGuide/id_credentials_mfa_enable_virtual.html)**
