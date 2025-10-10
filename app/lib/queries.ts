const baseUrl = process.env.WORDPRESS_URL;
import { gql, GraphQLClient } from "graphql-request";

import { Category } from "./types";

if (!baseUrl) {
  throw new Error("WORDPRESS_URL environment variable is not defined");
}

// const client = new GraphQLClient(`${baseUrl}/graphql`);
const client = new GraphQLClient(baseUrl); // no extra /graphql

export async function getCategories(): Promise<Category[]> {
  const query = gql`
    query getCategories {
  categories(first: 100) {
    nodes {
      id
      name
      slug
      description 
      count
      parentId
    }
  }
}`;

  const data: { categories: { nodes: Category[] } } = await client.request(query);
  return data.categories.nodes;

}