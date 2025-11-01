# Email Setup Instructions for Ahadu Habesha Order Form

## ✅ EmailJS Setup (Current Configuration)

You've added your EmailJS public key: `f252607b-2089-4137-85b0-25b7b84a607c`

### Next Steps Required:

1. **Go to EmailJS Dashboard:** https://dashboard.emailjs.com/
2. **Create Email Service:**
   - Click "Add New Service"
   - Choose "Gmail" (recommended)
   - Service ID must be: `service_ahaduhabesha`
   - Connect your Gmail account (girmatensae18@gmail.com)

3. **Create Email Template:**
   - Click "Create New Template" 
   - Template ID must be: `template_ahaduhabesha`
   - Use this template content:

```html
Subject: New Order from {{customer_name}} - {{product_name}}

ORDER DETAILS:
Product: {{product_name}}
Price: {{product_price}}

CUSTOMER INFORMATION:
Name: {{customer_name}}
Phone: {{customer_phone}}
Address: {{customer_address}}

MESSAGE:
{{customer_message}}

Order Date: {{order_date}}
```

4. **Test the Form:**
   - Go to your website
   - Click any shopping cart
   - Fill out the form
   - Should show "Order sent successfully!"

---

## Alternative: Web3Forms (Simpler Setup)

If EmailJS setup is complex, you can switch to Web3Forms:

1. **Visit:** https://web3forms.com/
2. **Enter:** girmatensae18@gmail.com  
3. **Get access key**
4. **Replace in:** `order-form-direct.html`
5. **Update cart.js** to use `order-form-direct.html`

---

## Current Status

✅ **EmailJS Public Key Added**  
⚠️  **Need Service ID Setup**  
⚠️  **Need Template Creation**  
✅ **Form Ready to Test**

## Testing Checklist

After setup:
- [ ] Click shopping cart → Order form opens
- [ ] Fill customer details → Form accepts input  
- [ ] Submit form → "Order sent successfully" appears
- [ ] Check email → Order received at girmatensae18@gmail.com
- [ ] Form clears → Ready for next order

**Need help with EmailJS setup?** Let me know and I can guide you through each step!