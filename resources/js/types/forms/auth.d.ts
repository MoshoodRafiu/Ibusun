import { AccountTypes } from "@/enums/accounts";

export type LoginForm = {
  email: string;
  password: string;
};

export type RegistrationForm = {
  type: AccountTypes;
  email: string;
  password: string;
  last_name: string;
  first_name: string;
  business_name: string;
  password_confirmation: string;
};